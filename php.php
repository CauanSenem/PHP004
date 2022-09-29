<?php 
if (isset($_POST['enviar']))
{
    $valormoto = 8654;
    $parcelas = intval($_POST['vezes']);
    if ($parcelas == 24)
    {
        $juros = 8654 * 1.015;
    }
    if ($parcelas == 36)
    {
        $juros = 8654 * 1.02;
    }
    if ($parcelas == 48)
    {
        $juros = 8654 * 1.025;
    }
    if ($parcelas == 60)
    {
        $juros = 8654 * 1.030;
    }
    $resultado = $juros / $parcelas;
    echo $resultado;
}
?>