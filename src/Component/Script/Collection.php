<?php namespace Ci4Xpander\Component\Script;

class Collection
{
    public $default = [];

    public function add($name = null, $script = null, $group = null)
    {
        if (is_null($group)) {
            $group = 'default';
        }

        $this->{$group}[$name][] = $script;

        return $this;
    }

    public function remove($name = null, $group = null)
    {
        if (is_null($group)) {
            $group = 'default';
        }

        if (is_null($name)) {
            unset($this->{$group});
        } else {
            unset($this->{$group}[$name]);
        }

        return $this;
    }

    public function get($name = null, $group = null)
    {
        if (is_null($group)) {
            $group = 'default';
        }

        if (is_null($name)) {
            return $this->{$group};
        } else {
            return $this->{$group}[$name];
        }
    }

    public function render($name = null, $group = null)
    {
        $scripts = $this->get($name, $group);

        if (is_array($scripts)) {
            $render = '';

            foreach ($scripts as $name => $script) {
                $render .= $script->render();
            }

            return $render;
        } else {
            return $scripts->render();
        }
    }
}