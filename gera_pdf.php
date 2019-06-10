<?php
include "db.php";

//TÍTULO DO RELATÓRIO
$titulo = "Relatório de Matrículas";
	
//LOGO QUE SERÁ COLOCADO NO RELATÓRIO
$imagem = "img/logo.png";
	
//ENDEREÇO DA BIBLIOTECA FPDF
$end_fpdf = "fpdf";
	
//NUMERO DE RESULTADOS POR PÁGINA
$por_pagina = 20;
	
//ENDEREÇO ONDE SERÁ GERADO O PDF
$end_final = "relatorio.pdf";
	
//TIPO DO PDF GERADO
//F-> SALVA NO ENDEREÇO ESPECIFICADO NA VAR END_FINAL
$tipo_pdf = "D";
	
//CONECTA COM O MYSQL
$linha = mysqli_num_rows($consulta_matricula);


//CALCULA QUANTAS PÁGINAS VÃO SER NECESSÁRIAS
$paginas = ceil($linha/$por_pagina);

//PREPARA PARA GERAR O PDF
define("FPDF_FONTPATH", "$end_fpdf/font/");
require_once("$end_fpdf/fpdf.php");
$pdf = new FPDF();	

//INICIALIZA AS VARIÁVEIS
$linha_atual = 0;
$inicio = 0;

//PÁGINAS
for($x=1; $x<=$paginas; $x++) {

//VERIFICA
$inicio = $linha_atual;
$fim = $linha_atual + $por_pagina;
	
if($fim > $linha) $fim = $linha;

$pdf->Open();
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 9);

$pdf->Image($imagem, 0, 8);
$pdf->Ln(2);
$pdf->Cell(185, 8, utf8_decode("Página $x de $paginas"), 0, 0, 'R');
$pdf->Ln(20);
$pdf->Cell(100, 8, utf8_decode("RELATÓRIO DE MATRÍCULAS"), 'C');

//QUEBRA DE LINHA
$pdf->Ln(20);

//MONTA O CABEÇALHO
$pdf->Cell(25, 8, utf8_decode("MATRÍCULA"), 1, 0, 'C');
$pdf->Cell(60, 8, utf8_decode("ALUNO"), 1, 0, 'C');
$pdf->Cell(40, 8, utf8_decode("CURSO"), 1, 0, 'C');
$pdf->Cell(60, 8, utf8_decode("PROFESSOR"), 1, 1, 'C');

//EXIBE OS REGISTROS
while ($linha = mysqli_fetch_array($consulta_matricula)){
$pdf->Cell(25, 8, utf8_decode($linha["id_aluno"]), 1, 0, 'C');
$pdf->Cell(60, 8, utf8_decode($linha["nome_aluno"]), 1, 0, 'L');
$pdf->Cell(40, 8, utf8_decode($linha["nome_curso"]), 1, 0, 'L');
$pdf->Cell(60, 8, utf8_decode($linha["nome_professor"]), 1, 1, 'L');
$linha_atual++;
}//FECHA FOR(REGISTROS – i)
}//FECHA FOR(PAGINAS – x)

//SAIDA DO PDF
$pdf->Output();