<?php

declare(strict_types=1);

namespace ElementorStarterTNO\Elementor\Widgets;

if (!defined('ABSPATH')) {
    exit();
}

class ThemeExampleWidget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'theme-paragraph';
    }

    public function get_title()
    {
        return 'Theme Paragraph';
    }

    public function get_icon()
    {
        return 'eicon-text-area';
    }

    protected function register_controls()
    {
        $this->start_controls_section('content_section', [
            'label' => __('Content', TEXTDOMAIN),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control('text', [
            'label' => __('Text', TEXTDOMAIN),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
        ]);

        $this->add_control('size', [
            'label' => __('Größe', TEXTDOMAIN),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => '',
            'options' => [
                '' => __('Normal', TEXTDOMAIN),
            ],
        ]);

        $this->add_control('color', [
            'label' => __('Farbe', TEXTDOMAIN),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .theme-paragraph-element' => 'color: {{VALUE}}',
            ],
        ]);

        $this->add_control('textAlign', [
            'label' => __('Ausrichtung', TEXTDOMAIN),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => __('Links', TEXTDOMAIN),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => __('Mitte', TEXTDOMAIN),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => __('Rechts', TEXTDOMAIN),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'left',
            'toggle' => true,
            'selectors' => [
                '{{WRAPPER}} .theme-paragraph-element' => 'text-align: {{VALUE}};',
            ],
        ]);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $text = $settings['text'];

        echo '<p class="theme-paragraph-element" data-aos="fade-up">' . $text . '</p>';
    }
}
