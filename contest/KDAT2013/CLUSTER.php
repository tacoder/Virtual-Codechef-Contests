<?php require("../../includes/header.php"); ?><h1>Recipe Cluster</h1><div class="content">

<p> </p>
<p>Now it has been quite a long time since Chef Po cooked his first dish and as the time evolved so evolved the dishes he cooked. On a fine day Chef Po was looking at his recipes book and after that he realised that it is almost impossible for him to search a recipe in that cluster containing a particular key ingredient. So he comes to you as a favour to develop a program that could find lexicographically smallest recipe present in L, a list of recipes, which is prefixed by the given key ingredient S. If no recipe is in L is prefixed by S then simply print S.</p>
<p> </p>
<h3>Input</h3>
<p>First line of input contains a number T, number of test cases. First line of each test case contains a string S. Next line contains a number N which is the number of strings present in list L. Each of the next N line contains a string.</p>
<h3>Output</h3>
<p>Print lexicographically smallest string present in L prefixed by S.</p>
<h3>Constraints</h3>
<p>T&lt;=100</p>
<p>		|s| &lt;= 50</p>
<p>		N&lt;=10
</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
cheese
3
cheeseroll
chees
cheesetoast<br />
<b>Output:</b>
cheeseroll
</pre><p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gauravjasraj">gauravjasraj</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-04-2013</td>
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