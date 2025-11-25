<?php

interface KontrakViewLintasan
{
    public function tampilLintasan($listLintasan): string;
    public function tampilFormLintasan($data = null): string;
}

?>