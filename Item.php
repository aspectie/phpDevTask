<?php
/**
 * Ненаследуемый класс Item
 *
 * @version 1.0
 * @copyright Vladislav Kovleshenko
 * @author Vladislav Kovleshenko
 */

final class Item
{
    private int $id;
    private string $name;
    private int $status;
    private bool $changed;

    /**
     * Конструктор класса
     *
     * @param string $id Значение для установки в {@link $id}
     * @uses Item::$name Для размещения имени
     */

    function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * Инициализация имени и статуса
     *
     * @param string $name Значение для установки в {@link $name}
     * @param int $status Значение для установки в {@link $status}
     *
     * @uses Item::$name Для размещения имени
     * @uses Item::$status Для размещения статуса
     */
    private function init(string $name, int $status)
    {
        if (!$this->name && !$this->status) {
            $this->name = $name;
            $this->status = $status;
        }
    }

    /**
     * Получение значения с {@link $id}
     * @return int
     * @uses Item::$id Переменная, с неё мы берём идентификатор
     */
    function getId(): int
    {
        return $this->id;
    }

    /**
     * Получение значения с {@link $name}
     * @return string
     * @uses Item::$name Переменная, с неё мы берём имя
     */
    function getName(): string
    {
        return $this->name;
    }

    /**
     * Получение значения с {@link $status}
     * @return int
     * @uses Item::$status Переменная, с неё мы берём статус
     */
    function getStatus(): int
    {
        return $this->status;
    }

    /**
     * Получение значения с {@link $changed}
     * @return bool
     * @uses Item::$changed Переменная, с неё мы берём состояние изменения
     */
    function getChanged(): bool
    {
        return $this->changed;
    }

    /**
     * Установка имени
     *
     * @param string $name Значение для установки в {@link $name}
     * @return void
     * @uses Item::$name Для размещения имени
     */
    function setName(string $name)
    {
        if (!is_null($name) && gettype($name) == 'string')
            $this->name = $name;
    }

    /**
     * Установка статуса
     *
     * @param string $status Значение для установки в {@link $status}
     * @return void
     * @uses Item::$status Для размещения статуса
     */
    function setStatus(string $status)
    {
        if (!is_null($status) && gettype($status) == 'integer')
            $this->status = $status;
    }

    /**
     * Установка значения изменения
     *
     * @param string $changed Значение для установки в {@link $changed}
     * @return void
     * @uses Item::$changed Для размещения состояния изменения
     */
    function setChanged(string $changed)
    {
        if (!is_null($changed) && gettype($changed) == 'boolean')
            $this->changed = $changed;
    }

    /**
     * Сохранение имени и статуса
     *
     * @param string $name Значение для установки в {@link $name}
     * @param string $status Значение для установки в {@link $status}
     * @param string $changed Значение для установки в {@link $changed}
     *
     * @return void
     * @uses Item::$status Для размещения статуса
     * @uses Item::$changed Для размещения состояния изменения
     *
     * @uses Item::$name Для размещения имени
     */
    function save(string $name, string $status, string $changed)
    {
        if ($changed == true) {
            $this->setName($name);
            $this->setStatus($status);
        }
    }
}