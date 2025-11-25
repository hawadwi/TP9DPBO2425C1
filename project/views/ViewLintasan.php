<?php
include_once("KontrakViewLintasan.php");
include_once ("models/DataLintasan.php");

class ViewLintasan implements KontrakViewLintasan {

    public function __construct() {}

    public function tampilLintasan($listLintasan): string {
        $tbody = '';
        $no = 1;
        foreach ($listLintasan as $lintasan) {
            $tbody .= '<tr>';
            $tbody .= '<td class="col-id">'. $no .'</td>';
            $tbody .= '<td>'. htmlspecialchars($lintasan->getNamaLintasan()) .'</td>';
            $tbody .= '<td>'. htmlspecialchars($lintasan->getNegaraLintasan()) .'</td>';
            $tbody .= '<td>'. htmlspecialchars($lintasan->getPanjang()) .'</td>';
            $tbody .= '<td>'. htmlspecialchars($lintasan->getJumlahTikungan()) .'</td>';
            $tbody .= '<td>'. htmlspecialchars($lintasan->getTipeLintasan()) .'</td>';
            $tbody .= '<td class="col-actions">
                        <a href="indexlintasan.php?screen=lintasan_edit&id='. $lintasan->getIdLintasan() .'" class="btn btn-edit">Edit</a>
                        <button data-id="'. $lintasan->getIdLintasan() .'" class="btn btn-delete">Hapus</button>
                       </td>';
            $tbody .= '</tr>';
            $no++;
        }

        $templatePath = __DIR__ . '/../template/skin_lintasan.html';
        if (file_exists($templatePath)) {
            $template = file_get_contents($templatePath);
            $template = str_replace('<!-- PHP will inject rows here -->', $tbody, $template);
            $total = count($listLintasan);
            $template = str_replace('Total:', 'Total: ' . $total, $template);
            return $template;
        }

        return $tbody;
    }

    public function tampilFormLintasan($data = null): string {
        $templatePath = __DIR__ . '/../template/form_lintasan.html';
        $template = file_get_contents($templatePath);
        if ($data) {
            $template = str_replace('value="add" id="lintasan-action"', 'value="edit" id="lintasan-action"', $template);
            $template = str_replace('value="" id="lintasan-id"', 'value="' . htmlspecialchars($data['id_lintasan']) . '" id="lintasan-id"', $template);
            $template = str_replace('id="nama_lintasan" name="nama_lintasan"', 'id="nama_lintasan" name="nama_lintasan" value="'. htmlspecialchars($data['nama_lintasan']).'"', $template);
            $template = str_replace('id="negara" name="negara"', 'id="negara" name="negara" value="'. htmlspecialchars($data['negara']).'"', $template);
            $template = str_replace('id="panjang_km" name="panjang_km"', 'id="panjang_km" name="panjang_km" value="'. htmlspecialchars($data['panjang_km']).'"', $template);
            $template = str_replace('id="jumlah_tikungan" name="jumlah_tikungan"', 'id="jumlah_tikungan" name="jumlah_tikungan" value="'. htmlspecialchars($data['jumlah_tikungan']).'"', $template);
            $template = str_replace('id="tipe_lintasan" name="tipe_lintasan"', 'id="tipe_lintasan" name="tipe_lintasan" value="'. htmlspecialchars($data['tipe_lintasan']).'"', $template);
        }
        return $template;
    }
}
?>
