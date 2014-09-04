<?php require("../../includes/header.php"); ?><h1>Gift from Tyrion</h1><div class="content">
<p>Tyrion Lannister has planned a suitable reward for Podrick Payne his squire for saving his life in the battle of Blackwater Bay. He intends for Pod to have a good time in one of Petyr Baelish's several establishments in Kings Landing.<br />
<br /><br /><br />
The establishment has several pleasures each with a pleasure value <b>Pi</b>. Each pleasure also has a fee of <b>Ci</b>. At the end of the day Tyrion wants Pod to have experienced at least <b>P</b> amount of pleasure in the most cheapest way. <br /><br /><br />
You are Bronn a low born sell-sword of great skill and cunning, so Tyrion has asked you to figure out the minimum amount of money Pod should end up with and the maximum amount of pleasure he can have with it. It is guaranteed that Pod can enjoy at least <b>P</b> amount of pleasure in the establishment.<br /></p>
<h3>Input</h3>
<p>First line of the input contains <b>T</b> (<b>1</b> &lt;= <b>T</b> &lt;= <b>25</b>), the number of test cases<br /><br />
First line of each test case consists of 2 numbers <b>N, P.</b><br /><b>N</b> is the number of pleasures in the establishment.<br /><br />
<b>N</b> lines follow each with a description of a pleasure. <br />The descriptions are of the form <b>Ni Pi Ci</b><br /><br />
<b>Ni</b> - Pleasure's name (a sequence of characters)<br /><br />
<b>Pi</b> - Pleasure value of <b>Ni</b><br /><br />
<b>Ci</b> - Fee charged for <b>Ni</b><br /></p>
<p>There is a blank line at the beginning of each test case.</p>
<h3>Output</h3>
<p>For each test case you must output 2 numbers <b>M</b> and <b>L</b>.<br /><br />
<b>M</b> - minimum amount of money that is needed to have a pleasure of at least <b>P</b>.<br />
<b>L</b> - Maximum pleasure Pod can have with the money <b>M</b>. (<b>L</b> &gt;= <b>P</b>)</p>
<h3>Constraints</h3>
<pre>
<b>1</b> &lt;= <b>T</b>  &lt;= <b>25</b><br />
<b>1</b> &lt;= <b>N</b>  &lt;= <b>100</b><br />
<b>1</b> &lt;= <b>Pi</b> &lt;= <b>50</b><br />
<b>0</b> &lt;= <b>Ci</b> &lt;= <b>50</b><br />
<b>1</b> &lt;= <b>P</b> &lt;= <b>5000</b><br />
<b>1</b> &lt;= <b>|Ni|</b> &lt;= <b>25</b> (Each <b>Ni</b> has at most 25 characters which can be either uppercase or lowercase).<br />
Each <b>Ni</b> is distinct.


<h3>Example</h3>
<b>Input</b>
2

4 12
Alayaya 5 10
Chataya 7 20
Dancy 5 5
Petyr 50 50

2 15
Marei 15 15
Jayde 16 5

<b>Output</b>
25 12
5 16</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kushagra_om">kushagra_om</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-11-2013</td>
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