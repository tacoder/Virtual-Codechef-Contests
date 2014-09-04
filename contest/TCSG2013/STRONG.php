<?php require("../../includes/header.php"); ?><h1>Strong and Weak</h1><div class="content">

<p>Chef Polo has come up with a challenge for Chef Palin. He has created a 2-D grid of letters. Each cell in the grid contains an alphabet <b>(from A to Z)</b>. Now he asks Palin to choose any random alphabet from A to Z. If that alphabet exists in the grid, Chef Palin has to find  the length of the longest path of consecutive letters,<br />
starting at that alphabet. Paths can step from one letter in the grid to any adjacent letter (horizontally, vertically, or diagonally).</p>
<h3>Input</h3>
<p>A single line containing two integers H, W the height and width of the grid respectively. Then H lines follow each of W uppercase letters only.Now the number of test cases <b>t</b>.Then each of the next<b> t</b> lines contain a single letter chosen by Chef Palin.</p>
<h3>Output</h3>
<p>For each of the t lines: If that letter exists in the grid, output <b>"Strong X"</b> where X is the length of the longest path of consecutive letters, starting at that </p>
<p>alphabet else output<b> "Weak"</b> (quotes for clarity).</p>
<h3>Constraints</h3>
<p><b> 1 &lt;= H, W &lt;= 100</b></p>
<p><b> 1&lt;=t&lt;=10</b></p>
<h3>Sample Input:</h3>
<p>4  3</p>
<p>ABE</p>
<p>CFG</p>
<p>BDH</p>
<p>ABC</p>
<p>3</p>
<p>A</p>
<p>G</p>
<p>R</p>
<p></p>
<h3>Sample Output:</h3>
<p>Strong 4</p>
<p>Strong 2</p>
<p>Weak</p>
<h3>Explanation:</h3>
<p>For<b> A</b> the longest consecutive path possible is "A->B->C->D". Hence output is <b>Strong 4</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuldeepfouzdar">kuldeepfouzdar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>