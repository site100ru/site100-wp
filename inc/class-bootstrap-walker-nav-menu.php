<?php
/**
 * inc/class-bootstrap-walker-nav-menu.php
 * Bootstrap Walker для меню с разделителями
 */

if (!defined('ABSPATH')) {
  exit; // Запрет прямого доступа
}

class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu
{

  private $menu_items_count = 0;
  private $current_item = 0;
  private $menu_items = array();

  /**
   * Начало обхода меню - подсчитываем элементы первого уровня
   */
  public function walk($elements, $max_depth, ...$args)
  {
    // Сохраняем все элементы и подсчитываем элементы первого уровня
    $this->menu_items = $elements;
    $this->menu_items_count = 0;
    $this->current_item = 0;

    foreach ($elements as $element) {
      if ($element->menu_item_parent == 0) {
        $this->menu_items_count++;
      }
    }

    return parent::walk($elements, $max_depth, ...$args);
  }

  /**
   * Начало уровня меню
   */
  public function start_lvl(&$output, $depth = 0, $args = array())
  {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }

  /**
   * Конец уровня меню
   */
  public function end_lvl(&$output, $depth = 0, $args = array())
  {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }

  /**
   * Начало элемента
   */
  public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'nav-item';

    // Проверка активности пункта меню
    $active_class = in_array('current-menu-item', $classes) || in_array('current_page_item', $classes) ? 'active' : '';

    // Проверка наличия дочерних элементов
    $has_children = in_array('menu-item-has-children', $classes);

    // Увеличиваем счетчик для элементов первого уровня
    if ($depth === 0) {
      $this->current_item++;
    }

    // Формирование классов для li
    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
    $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

    $output .= $indent . '<li' . $class_names . '>';

    // Атрибуты ссылки
    $atts = array();
    $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
    $atts['target'] = !empty($item->target) ? $item->target : '';
    $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
    $atts['href'] = !empty($item->url) ? $item->url : '';

    // Формирование классов для ссылки
    if ($depth === 0) {
      $atts['class'] = 'nav-link';

      if ($has_children) {
        $atts['class'] .= ' dropdown-toggle';
        $atts['data-bs-toggle'] = 'dropdown';
        $atts['aria-expanded'] = 'false';
        $atts['role'] = 'button';
      }

      if ($active_class) {
        $atts['class'] .= ' ' . $active_class;
        $atts['aria-current'] = 'page';
      }
    } else {
      $atts['class'] = 'dropdown-item';

      if ($active_class) {
        $atts['class'] .= ' ' . $active_class;
      }
    }

    // Формирование атрибутов ссылки
    $attributes = '';
    foreach ($atts as $attr => $value) {
      if (!empty($value)) {
        $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
        $attributes .= ' ' . $attr . '="' . $value . '"';
      }
    }

    // Формирование ссылки
    $item_output = isset($args->before) ? $args->before : '';
    $item_output .= '<a' . $attributes . '>';
    $item_output .= (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '');
    $item_output .= '</a>';
    $item_output .= isset($args->after) ? $args->after : '';

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }

  /**
   * Конец элемента
   */
  public function end_el(&$output, $item, $depth = 0, $args = array())
  {
    $output .= "</li>\n";

    // Добавляем разделитель после элементов первого уровня (кроме последнего)
    // Но НЕ после dropdown элементов
    if ($depth === 0 && $this->current_item < $this->menu_items_count) {
      $classes = empty($item->classes) ? array() : (array) $item->classes;
      $has_children = in_array('menu-item-has-children', $classes);

      // Добавляем разделитель только если это не dropdown
      if (!$has_children) {
        $output .= '<li class="nav-item d-none d-xl-inline">';
        $output .= '<span class="nav-link px-1"><img src="' . get_template_directory_uri() . '/img/ico/menu-point.svg"></span>';
        $output .= '</li>' . "\n";
      }
    }
  }
}