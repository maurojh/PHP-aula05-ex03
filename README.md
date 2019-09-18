"# PHP-aula05-ex03" 
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<!-- 2019-09-17 ter 22:10 -->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>&lrm;</title>
<meta name="generator" content="Org mode" />
<style type="text/css">
 <!--/*--><![CDATA[/*><!--*/
  .title  { text-align: center;
             margin-bottom: .2em; }
  .subtitle { text-align: center;
              font-size: medium;
              font-weight: bold;
              margin-top:0; }
  .todo   { font-family: monospace; color: red; }
  .done   { font-family: monospace; color: green; }
  .priority { font-family: monospace; color: orange; }
  .tag    { background-color: #eee; font-family: monospace;
            padding: 2px; font-size: 80%; font-weight: normal; }
  .timestamp { color: #bebebe; }
  .timestamp-kwd { color: #5f9ea0; }
  .org-right  { margin-left: auto; margin-right: 0px;  text-align: right; }
  .org-left   { margin-left: 0px;  margin-right: auto; text-align: left; }
  .org-center { margin-left: auto; margin-right: auto; text-align: center; }
  .underline { text-decoration: underline; }
  #postamble p, #preamble p { font-size: 90%; margin: .2em; }
  p.verse { margin-left: 3%; }
  pre {
    border: 1px solid #ccc;
    box-shadow: 3px 3px 3px #eee;
    padding: 8pt;
    font-family: monospace;
    overflow: auto;
    margin: 1.2em;
  }
  pre.src {
    position: relative;
    overflow: visible;
    padding-top: 1.2em;
  }
  pre.src:before {
    display: none;
    position: absolute;
    background-color: white;
    top: -10px;
    right: 10px;
    padding: 3px;
    border: 1px solid black;
  }
  pre.src:hover:before { display: inline;}
  /* Languages per Org manual */
  pre.src-asymptote:before { content: 'Asymptote'; }
  pre.src-awk:before { content: 'Awk'; }
  pre.src-C:before { content: 'C'; }
  /* pre.src-C++ doesn't work in CSS */
  pre.src-clojure:before { content: 'Clojure'; }
  pre.src-css:before { content: 'CSS'; }
  pre.src-D:before { content: 'D'; }
  pre.src-ditaa:before { content: 'ditaa'; }
  pre.src-dot:before { content: 'Graphviz'; }
  pre.src-calc:before { content: 'Emacs Calc'; }
  pre.src-emacs-lisp:before { content: 'Emacs Lisp'; }
  pre.src-fortran:before { content: 'Fortran'; }
  pre.src-gnuplot:before { content: 'gnuplot'; }
  pre.src-haskell:before { content: 'Haskell'; }
  pre.src-hledger:before { content: 'hledger'; }
  pre.src-java:before { content: 'Java'; }
  pre.src-js:before { content: 'Javascript'; }
  pre.src-latex:before { content: 'LaTeX'; }
  pre.src-ledger:before { content: 'Ledger'; }
  pre.src-lisp:before { content: 'Lisp'; }
  pre.src-lilypond:before { content: 'Lilypond'; }
  pre.src-lua:before { content: 'Lua'; }
  pre.src-matlab:before { content: 'MATLAB'; }
  pre.src-mscgen:before { content: 'Mscgen'; }
  pre.src-ocaml:before { content: 'Objective Caml'; }
  pre.src-octave:before { content: 'Octave'; }
  pre.src-org:before { content: 'Org mode'; }
  pre.src-oz:before { content: 'OZ'; }
  pre.src-plantuml:before { content: 'Plantuml'; }
  pre.src-processing:before { content: 'Processing.js'; }
  pre.src-python:before { content: 'Python'; }
  pre.src-R:before { content: 'R'; }
  pre.src-ruby:before { content: 'Ruby'; }
  pre.src-sass:before { content: 'Sass'; }
  pre.src-scheme:before { content: 'Scheme'; }
  pre.src-screen:before { content: 'Gnu Screen'; }
  pre.src-sed:before { content: 'Sed'; }
  pre.src-sh:before { content: 'shell'; }
  pre.src-sql:before { content: 'SQL'; }
  pre.src-sqlite:before { content: 'SQLite'; }
  /* additional languages in org.el's org-babel-load-languages alist */
  pre.src-forth:before { content: 'Forth'; }
  pre.src-io:before { content: 'IO'; }
  pre.src-J:before { content: 'J'; }
  pre.src-makefile:before { content: 'Makefile'; }
  pre.src-maxima:before { content: 'Maxima'; }
  pre.src-perl:before { content: 'Perl'; }
  pre.src-picolisp:before { content: 'Pico Lisp'; }
  pre.src-scala:before { content: 'Scala'; }
  pre.src-shell:before { content: 'Shell Script'; }
  pre.src-ebnf2ps:before { content: 'ebfn2ps'; }
  /* additional language identifiers per "defun org-babel-execute"
       in ob-*.el */
  pre.src-cpp:before  { content: 'C++'; }
  pre.src-abc:before  { content: 'ABC'; }
  pre.src-coq:before  { content: 'Coq'; }
  pre.src-groovy:before  { content: 'Groovy'; }
  /* additional language identifiers from org-babel-shell-names in
     ob-shell.el: ob-shell is the only babel language using a lambda to put
     the execution function name together. */
  pre.src-bash:before  { content: 'bash'; }
  pre.src-csh:before  { content: 'csh'; }
  pre.src-ash:before  { content: 'ash'; }
  pre.src-dash:before  { content: 'dash'; }
  pre.src-ksh:before  { content: 'ksh'; }
  pre.src-mksh:before  { content: 'mksh'; }
  pre.src-posh:before  { content: 'posh'; }
  /* Additional Emacs modes also supported by the LaTeX listings package */
  pre.src-ada:before { content: 'Ada'; }
  pre.src-asm:before { content: 'Assembler'; }
  pre.src-caml:before { content: 'Caml'; }
  pre.src-delphi:before { content: 'Delphi'; }
  pre.src-html:before { content: 'HTML'; }
  pre.src-idl:before { content: 'IDL'; }
  pre.src-mercury:before { content: 'Mercury'; }
  pre.src-metapost:before { content: 'MetaPost'; }
  pre.src-modula-2:before { content: 'Modula-2'; }
  pre.src-pascal:before { content: 'Pascal'; }
  pre.src-ps:before { content: 'PostScript'; }
  pre.src-prolog:before { content: 'Prolog'; }
  pre.src-simula:before { content: 'Simula'; }
  pre.src-tcl:before { content: 'tcl'; }
  pre.src-tex:before { content: 'TeX'; }
  pre.src-plain-tex:before { content: 'Plain TeX'; }
  pre.src-verilog:before { content: 'Verilog'; }
  pre.src-vhdl:before { content: 'VHDL'; }
  pre.src-xml:before { content: 'XML'; }
  pre.src-nxml:before { content: 'XML'; }
  /* add a generic configuration mode; LaTeX export needs an additional
     (add-to-list 'org-latex-listings-langs '(conf " ")) in .emacs */
  pre.src-conf:before { content: 'Configuration File'; }

  table { border-collapse:collapse; }
  caption.t-above { caption-side: top; }
  caption.t-bottom { caption-side: bottom; }
  td, th { vertical-align:top;  }
  th.org-right  { text-align: center;  }
  th.org-left   { text-align: center;   }
  th.org-center { text-align: center; }
  td.org-right  { text-align: right;  }
  td.org-left   { text-align: left;   }
  td.org-center { text-align: center; }
  dt { font-weight: bold; }
  .footpara { display: inline; }
  .footdef  { margin-bottom: 1em; }
  .figure { padding: 1em; }
  .figure p { text-align: center; }
  .inlinetask {
    padding: 10px;
    border: 2px solid gray;
    margin: 10px;
    background: #ffffcc;
  }
  #org-div-home-and-up
   { text-align: right; font-size: 70%; white-space: nowrap; }
  textarea { overflow-x: auto; }
  .linenr { font-size: smaller }
  .code-highlighted { background-color: #ffff00; }
  .org-info-js_info-navigation { border-style: none; }
  #org-info-js_console-label
    { font-size: 10px; font-weight: bold; white-space: nowrap; }
  .org-info-js_search-highlight
    { background-color: #ffff00; color: #000000; font-weight: bold; }
  .org-svg { width: 90%; }
  /*]]>*/-->
</style>
<script type="text/javascript">
/*
@licstart  The following is the entire license notice for the
JavaScript code in this tag.

Copyright (C) 2012-2019 Free Software Foundation, Inc.

The JavaScript code in this tag is free software: you can
redistribute it and/or modify it under the terms of the GNU
General Public License (GNU GPL) as published by the Free Software
Foundation, either version 3 of the License, or (at your option)
any later version.  The code is distributed WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.

As additional permission under GNU GPL version 3 section 7, you
may distribute non-source (e.g., minimized or compacted) forms of
that code without the copy of the GNU GPL normally required by
section 4, provided you include this license notice and a URL
through which recipients can access the Corresponding Source.


@licend  The above is the entire license notice
for the JavaScript code in this tag.
*/
<!--/*--><![CDATA[/*><!--*/
 function CodeHighlightOn(elem, id)
 {
   var target = document.getElementById(id);
   if(null != target) {
     elem.cacheClassElem = elem.className;
     elem.cacheClassTarget = target.className;
     target.className = "code-highlighted";
     elem.className   = "code-highlighted";
   }
 }
 function CodeHighlightOff(elem, id)
 {
   var target = document.getElementById(id);
   if(elem.cacheClassElem)
     elem.className = elem.cacheClassElem;
   if(elem.cacheClassTarget)
     target.className = elem.cacheClassTarget;
 }
/*]]>*///-->
</script>
</head>
<body>
<div id="content">
<div id="table-of-contents">
<h2>Table of Contents</h2>
<div id="text-table-of-contents">
<ul>
<li><a href="#org550c570">1. Variáveis globais do PHP</a>
<ul>
<li><a href="#org710c529">1.1. $GLOBALS</a></li>
<li><a href="#orga20b3d9">1.2. $_SERVER</a></li>
<li><a href="#org151cf9b">1.3. $_REQUEST</a></li>
<li><a href="#orga612b48">1.4. $_POST</a></li>
<li><a href="#org1a91035">1.5. $_GET</a></li>
</ul>
</li>
<li><a href="#org8d78ac9">2. Funções</a>
<ul>
<li><a href="#orge5fdae2">2.1. Criar uma função</a></li>
<li><a href="#orgd72cb94">2.2. Argumentos de funções</a></li>
</ul>
</li>
<li><a href="#org3b2e6e8">3. Cookies</a>
<ul>
<li><a href="#org8fc1972">3.1. Criar um cookie</a></li>
<li><a href="#orgfb46e41">3.2. Modificando um valor de cookie</a></li>
<li><a href="#org0eb0d8b">3.3. Apagando um cookie</a></li>
<li><a href="#org20342fb">3.4. Verificar se cookies estão habilitados</a></li>
<li><a href="#org1e85f58">3.5. Exercício 1</a></li>
<li><a href="#org2f70fa2">3.6. Exercício 2</a></li>
<li><a href="#org187241a">3.7. Exercício 3</a></li>
</ul>
</li>
</ul>
</div>
</div>

<div id="outline-container-org550c570" class="outline-2">
<h2 id="org550c570"><span class="section-number-2">1</span> Variáveis globais do PHP</h2>
<div class="outline-text-2" id="text-1">
<p>
O PHP possui variáveis "superglobais": sempre acessíveis.
</p>

<ul class="org-ul">
<li>$GLOBALS</li>
<li>$_SERVER</li>
<li>$_REQUEST</li>
<li>$_POST</li>
<li>$_GET</li>
<li>$_FILES</li>
<li>$_ENV</li>
<li>$_COOKIE</li>
<li>$_SESSION</li>
</ul>
</div>

<div id="outline-container-org710c529" class="outline-3">
<h3 id="org710c529"><span class="section-number-3">1.1</span> $GLOBALS</h3>
<div class="outline-text-3" id="text-1-1">
<p>
Para acessar variáveis globais em qualquer parte use $GLOBALS:
</p>

<p>
Note que $GLOBALS não possui (_)!
</p>

<pre class="example">
&lt;?php
$x = 75;
$y = 25;
 
function soma() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
soma();
echo $z;
?&gt;
</pre>
</div>
</div>

<div id="outline-container-orga20b3d9" class="outline-3">
<h3 id="orga20b3d9"><span class="section-number-3">1.2</span> $_SERVER</h3>
<div class="outline-text-3" id="text-1-2">
<p>
A variável $_SERVER guarda informações sobre cabeçalhos, caminhos e pastas de script.
</p>

<pre class="example">
&lt;?php
echo $_SERVER['PHP_SELF'];
echo "&lt;br&gt;";
echo $_SERVER['SERVER_NAME'];
echo "&lt;br&gt;";
echo $_SERVER['HTTP_HOST'];
echo "&lt;br&gt;";
echo $_SERVER['HTTP_REFERER'];
echo "&lt;br&gt;";
echo $_SERVER['HTTP_USER_AGENT'];
echo "&lt;br&gt;";
echo $_SERVER['SCRIPT_NAME'];
?&gt;
</pre>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">


<colgroup>
<col  class="org-left" />

<col  class="org-left" />
</colgroup>
<thead>
<tr>
<th scope="col" class="org-left">chave</th>
<th scope="col" class="org-left">resultado</th>
</tr>
</thead>
<tbody>
<tr>
<td class="org-left">REQUEST_METHOD</td>
<td class="org-left">método usado GET ou POST</td>
</tr>

<tr>
<td class="org-left">REMOTE_ADDR</td>
<td class="org-left">ip do usuário</td>
</tr>

<tr>
<td class="org-left">SCRIPT_FILENAME</td>
<td class="org-left">caminho completo do script</td>
</tr>
</tbody>
</table>
</div>
</div>

<div id="outline-container-org151cf9b" class="outline-3">
<h3 id="org151cf9b"><span class="section-number-3">1.3</span> $_REQUEST</h3>
<div class="outline-text-3" id="text-1-3">
<p>
Usado para receber os valores enviados com formulários.
</p>

<pre class="example">
&lt;html&gt;
&lt;body&gt;

&lt;form method="post" action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;"&gt;
  Name: &lt;input type="text" name="nomeusuario"&gt;
  &lt;input type="submit"&gt;
&lt;/form&gt;

&lt;?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // recebe o valor digitado
    $nome = $_REQUEST['nomeusuario'];
    if (empty($nome)) {
        echo "Nome vazio";
    } else {
        echo $name;
    }
}
?&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
</div>
</div>

<div id="outline-container-orga612b48" class="outline-3">
<h3 id="orga612b48"><span class="section-number-3">1.4</span> $_POST</h3>
<div class="outline-text-3" id="text-1-4">
<p>
Recebe informações de formulário enviado com <code>method='post'</code>.
</p>

<pre class="example">
&lt;html&gt;
&lt;body&gt;

&lt;form method="post" action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;"&gt;
  Name: &lt;input type="text" name="nomeusuario"&gt;
  &lt;input type="submit"&gt;
&lt;/form&gt;

&lt;?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // recebe o valor digitado
    $name = $_POST['nomeusuario'];
    if (empty($nome)) {
        echo "Nome está vazio.";
    } else {
        echo $nome;
    }
}
?&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
</div>
</div>

<div id="outline-container-org1a91035" class="outline-3">
<h3 id="org1a91035"><span class="section-number-3">1.5</span> $_GET</h3>
<div class="outline-text-3" id="text-1-5">
<p>
Recebe informações de formulário enviado com <code>method='get'</code>.
</p>

<pre class="example">
&lt;html&gt;
&lt;body&gt;

&lt;form method="get" action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;"&gt;
  Name: &lt;input type="text" name="nomeusuario"&gt;
  &lt;input type="submit"&gt;
&lt;/form&gt;

&lt;?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // recebe o valor digitado
    $name = $_GET['nomeusuario'];
    if (empty($nome)) {
        echo "Nome está vazio.";
    } else {
        echo $nome;
    }
}
?&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>

<p>
O interessante do método GET é que podemos criar um link com parâmetros:
</p>

<pre class="example">
&lt;html&gt;
&lt;body&gt;

&lt;a href="carrinho.php?produto=LARANJA&amp;quantidade=3"&gt;Comprar Laranja&lt;/a&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>

<p>
Quando o usuário aperta <b>Comprar Laranja</b> o código à seguir executa:
</p>

<pre class="example">
&lt;html&gt;
&lt;body&gt;

&lt;?php
echo "Comprando " . $_GET['quantidade'] . " unidade(s) de " . $_GET['produto'];
?&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
</div>
</div>
</div>


<div id="outline-container-org8d78ac9" class="outline-2">
<h2 id="org8d78ac9"><span class="section-number-2">2</span> Funções</h2>
<div class="outline-text-2" id="text-2">
<p>
Podemos criar funções em PHP.
</p>
</div>

<div id="outline-container-orge5fdae2" class="outline-3">
<h3 id="orge5fdae2"><span class="section-number-3">2.1</span> Criar uma função</h3>
<div class="outline-text-3" id="text-2-1">
<pre class="example">
function nomeDaFunção() {
   // código executado na chamada
}
</pre>

<p>
O nome de uma função pode começar com uma letra ou sublinhado (<code>_</code>).
</p>

<p>
No código abaixo, criamos a função nas linhas 1 à 3.
</p>

<p>
Na linha 5 está a chamada à função.
</p>

<pre class="example">
<span class="linenr">1: </span>function mensagem() {
<span class="linenr">2: </span>   echo "Bem vindo!";
<span class="linenr">3: </span>}
<span class="linenr">4: </span>
<span class="linenr">5: </span>mensagem();
</pre>
</div>
</div>

<div id="outline-container-orgd72cb94" class="outline-3">
<h3 id="orgd72cb94"><span class="section-number-3">2.2</span> Argumentos de funções</h3>
<div class="outline-text-3" id="text-2-2">
<p>
Podemos passar dados para funções com argumentos.
</p>

<p>
Argumentos são como variáveis. O argumentos ficam entre parênteses.
</p>

<pre class="example">
&lt;?php

function mensagem($nome) {
  echo "Olá, $nome!";
}

mensagem('Mauro');
?&gt;
</pre>

<p>
Podemos ter mais de um argumento:
</p>

<pre class="example">
&lt;?php

function mensagem($nascimento, $nome) {
  echo "Olá, $nome!";
  
  $idade = 2019 - $nascimento;
  echo "Até o fim do ano você terá: $idade";
}

mensagem(1981, 'Mauro');
?&gt;
</pre>
</div>
</div>
</div>


<div id="outline-container-org3b2e6e8" class="outline-2">
<h2 id="org3b2e6e8"><span class="section-number-2">3</span> Cookies</h2>
<div class="outline-text-2" id="text-3">
<p>
Um cookie é um pequeno arquivo que é armazenado no computador do usuário.
</p>

<p>
Podemos usar o cookie para armazenar dados.
</p>

<p>
Toda vez que o navegador abre uma página, se houver cookie ele é enviado ao servidor.
</p>
</div>

<div id="outline-container-org8fc1972" class="outline-3">
<h3 id="org8fc1972"><span class="section-number-3">3.1</span> Criar um cookie</h3>
<div class="outline-text-3" id="text-3-1">
<p>
Um cookie é criado com a função <b>setcookie()</b>:
</p>

<pre class="example">
setcookie( nome, valor, validade, caminho, dominio, segurança, httponly);
</pre>

<p>
Normalmente ajustamos nome, valor, validade e caminho.
</p>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">


<colgroup>
<col  class="org-left" />

<col  class="org-left" />
</colgroup>
<tbody>
<tr>
<td class="org-left">nome</td>
<td class="org-left">chave do valor</td>
</tr>

<tr>
<td class="org-left">valor</td>
<td class="org-left">dado que será guardado</td>
</tr>

<tr>
<td class="org-left">validade</td>
<td class="org-left">quando o cookie não poderá mais ser usado</td>
</tr>

<tr>
<td class="org-left">caminho</td>
<td class="org-left">se usar "/" indicamos que o site todo usa o cookie</td>
</tr>
</tbody>
</table>

<pre class="example">
&lt;?php
$cookie_nome = "usuario";
$cookie_valor = "Fulano de Tal";
setcookie($cookie_nome, $cookie_valor, time() + (86400 * 30), "/"); // 86400 = 1 dia
?&gt;
&lt;html&gt;
&lt;body&gt;

&lt;?php
if(!isset($_COOKIE[$cookie_nome])) {
    echo "Nome: '" . $cookie_nome . "' não existe!";
} else {
    echo "Cookie '" . $cookie_nome . "' foi salvo!&lt;br&gt;";
    echo "O valor é: " . $_COOKIE[$cookie_valor];
}
?&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>

<p>
O valor de cookie é automaticamente guardado códificado em URL (URLencoded) quando o cookie é salvo, e automaticamente decodificado quando recebido. Para evitar esse comportamente use <b>setrawcookie()</b>.
</p>
</div>
</div>

<div id="outline-container-orgfb46e41" class="outline-3">
<h3 id="orgfb46e41"><span class="section-number-3">3.2</span> Modificando um valor de cookie</h3>
<div class="outline-text-3" id="text-3-2">
<p>
Para modificar um cookie, ajuste o valor novamente usando <b>setcookie()</b>:
</p>

<pre class="example">
&lt;?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?&gt;
&lt;html&gt;
&lt;body&gt;

&lt;?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!&lt;br&gt;";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
</div>
</div>

<div id="outline-container-org0eb0d8b" class="outline-3">
<h3 id="org0eb0d8b"><span class="section-number-3">3.3</span> Apagando um cookie</h3>
<div class="outline-text-3" id="text-3-3">
<p>
Para apagar um cookie, use a função <b>setcookie()</b> para ajustar a validade para uma data passada (anterior à atual).
</p>

<pre class="example">
&lt;?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?&gt;
&lt;html&gt;
&lt;body&gt;

&lt;?php
echo "Cookie 'user' is deleted.";
?&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
</div>
</div>

<div id="outline-container-org20342fb" class="outline-3">
<h3 id="org20342fb"><span class="section-number-3">3.4</span> Verificar se cookies estão habilitados</h3>
<div class="outline-text-3" id="text-3-4">
<p>
Crie um cookie e verifique se o vetor aumentou.
</p>

<pre class="example">
&lt;?php
setcookie("teste_cookie", "teste", time() + 3600, '/');
?&gt;
&lt;html&gt;
&lt;body&gt;

&lt;?php
if( count($_COOKIE) &gt; 0) {
    echo "Cookies habilitados.";
} else {
    echo "Cookies desabilitados.";
}
?&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
</div>
</div>

<div id="outline-container-org1e85f58" class="outline-3">
<h3 id="org1e85f58"><span class="section-number-3">3.5</span> Exercício 1</h3>
<div class="outline-text-3" id="text-3-5">
<p>
Crie um página que exibe quatro opções de provas:
</p>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">


<colgroup>
<col  class="org-left" />
</colgroup>
<tbody>
<tr>
<td class="org-left">Português</td>
</tr>

<tr>
<td class="org-left">Matemática</td>
</tr>

<tr>
<td class="org-left">Inglês</td>
</tr>

<tr>
<td class="org-left">Geografia</td>
</tr>
</tbody>
</table>

<p>
Usando um select:
</p>

<pre class="example">
&lt;select name="materia"&gt;
  &lt;option value="por"&gt;Português&lt;/option&gt;
  &lt;option value="mat"&gt;Matemática&lt;/option&gt;
  &lt;option value="ing"&gt;Inglês&lt;/option&gt;
  &lt;option value="geo"&gt;Geografia&lt;/option&gt;
&lt;/select&gt;
</pre>

<p>
A página deve enviar os dados para ela mesma e salvar a materia selecionada em um cookie:
</p>

<pre class="example">
$materia = $_POST['materia'];

$nome = "escolhida";

setcookie($nome, $materia, time() + (86400 * 30), "/");
</pre>

<p>
Em seguida a página deve mudar para uma página de prova de acordo com a matéria escolhida:
</p>

<pre class="example">
switch($_COOKIE["escolhida"]) {
   case 'por': 
      ?&gt;&lt;script&gt;window.location.assign("portugues.php");&lt;/script&gt;&lt;?php
      break;
   case 'mat':
      ?&gt;&lt;script&gt;window.location.assign("matematica.php");&lt;/script&gt;&lt;?php
      break;
}
</pre>
</div>
</div>

<div id="outline-container-org2f70fa2" class="outline-3">
<h3 id="org2f70fa2"><span class="section-number-3">3.6</span> Exercício 2</h3>
<div class="outline-text-3" id="text-3-6">
<p>
Crie uma página para cada uma das disciplinas anteriores.
</p>

<p>
A página deve salvar a questão atual e os pontos usando cookies.
</p>

<p>
Crie ao menos 5 questões e mostre apenas uma por vez.
</p>

<p>
Se o usuário fechar o navegador a página deve começar de onde ele parou.
</p>
</div>
</div>

<div id="outline-container-org187241a" class="outline-3">
<h3 id="org187241a"><span class="section-number-3">3.7</span> Exercício 3</h3>
<div class="outline-text-3" id="text-3-7">
<p>
Crie uma página que recebe a configuração desejada pelo usuário para o TinyMCE item toolbar.
</p>

<p>
Guarde a configuração desejada em um cookie e exiba o editor usando a configuração selecionada anteriormente.
</p>

<p>
Se o usuário abrir a página novamente o editor deve ser mostrado como configurado.
</p>
</div>
</div>
</div>
</div>
<div id="postamble" class="status">
<p class="date">Created: 2019-09-17 ter 22:10</p>
<p class="validation"><a href="http://validator.w3.org/check?uri=referer">Validate</a></p>
</div>
</body>
</html>
