<?php 

class Elementor_Test_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'elementor-test';
    }

    public function get_title() {
        return __('Elementor Test', 'elementor-addons');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_custom_help_url(){
        return 'https://example.com';
    }

    public function get_categories() {
        return ['XTra-Addons'];
    }

    public function get_keywords() {
        return ['test', 'heading'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'elementor-addons'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Title', 'elementor-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Hello World', 'elementor-addons'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="elementor-test-widget">' . esc_html($settings['title']) . '</div>';
    }

}