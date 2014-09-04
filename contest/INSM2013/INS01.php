<?php require("../../includes/header.php"); ?><h1>Pizza celebration</h1><div class="content">
<p>Chef has a Pizza outlet and all of the people of Byteland are aware of the special offer by Chef on Wednesday (i.e buy 1 get 1 free). But people of Byteland are health conscious, they don't want to eat two pizzas and hence they always go in such groups (so that they have to pay half price for a pizza).</p>
<p>If a group is not formed they will go on next wednesday. Two people will go together if and only if they are friends (Yes, friendship is transitive). As you know, byteland consists of many special people, one of them is our own Punk-it, who loves Pecorino cheese burst Pizza a lot. He is ready to go with anyone if group can be formed. </p>
<h3>Input</h3>
<p>The first line of the input contains a single integer T, denoting the number of test cases. The description of T test cases follows. The first line of each test case contains two space-separated integers N (the number of people excluding Punk-it) and M( the number of relations). Each of the following M lines contains two space-separated integers A and B denoting A and B are friends.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing on interger, denoting the maximum number of people who will enjoy pizza.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>A,B</b> ≤ <b>N</b></li>
<li><b>A</b> != <b>B</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
6 4
1 2
2 3
3 4
5 6
7 4
1 2
2 3
3 4
6 7

<b>Output:</b>
6
8

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/insomnia_adm">insomnia_adm</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 - 1.5 sec</td>
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