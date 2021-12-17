<?php
declare(strict_types=1);

namespace CrudView\Menu;

use InvalidArgumentException;

class MenuDropdown
{
    /**
     * The name of the dropdown
     *
     * @var string
     **/
    protected $title;

    /**
     * Array of MenuDivider|MenuItem entries
     *
     * @var array
     **/
    protected $entries = [];

    /**
     * The direction the dropdown opens in
     *
     * @var string
     **/
    protected $direction = 'down';

    /**
     * Contains an HTML link.
     *
     * @param string $title The name of the dropdown
     * @param array $entries Array of MenuDivider|MenuItem entries
     * @param string $direction The direction the dropdown opens: down,up,left or right
     */
    public function __construct(string $title, array $entries = [], $direction = 'down')
    {
        $this->title = $title;
        $this->entries = $entries;
        if ($direction !== 'down') {
            $directions = ['down', 'up', 'left', 'right'];
            if (!in_array($direction, $directions)) {
                throw new InvalidArgumentException(sprintf(
                    'Invalid arg `%s`, use one of these: %s',
                    $direction,
                    implode(', ', $directions)
                ));
            }
        }
        $this->direction = $direction;
    }

    /**
     * Returns the menu item dropdown title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Returns the menu item dropdown entries
     *
     * @return array
     */
    public function getEntries(): array
    {
        return $this->entries;
    }

    /**
     * Returns the css class representing the direction the dropdown opens in
     *
     * @return string
     */
    public function getDirection(): string
    {
        return 'drop' . $this->direction;
    }
}
