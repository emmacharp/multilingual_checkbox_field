<?php

/**
 *
 */
class EntryQueryMultilingualCheckboxAdapter extends EntryQueryTextboxAdapter
{
    public function getFilterColumns()
    {
        $lc = FLang::getLangCode();

        if ($lc) {
            return ['value-' . $lc];
        }

        return parent::getFilterColumns();
    }

    public function getSortColumns()
    {
        $lc = FLang::getLangCode();

        if ($lc) {
            return ['value-' . $lc];
        }

        return parent::getSortColumns();
    }
}
