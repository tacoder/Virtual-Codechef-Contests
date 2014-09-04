<?php require("../../includes/header.php"); ?><h1>Rapid Fire</h1><div class="content">

<pre>
<h3>Problem Description</h3>
Raghu have <b>N</b> members in his team , each having certain strength. Ranvijay is asking some questions in
a rapid fire from him.His questions are of the form ,given strength <b>S</b> and a number <b>K</b> , do there exist
 <b>K</b> different members such that sum of their strengths is <b>S</b>.


<h3>Input</h3>

First line of input contains <b>N</b> and <b>Q</b>.Number of soldiers and the number of queries asked by Ranvijay.
Then <b>N</b> lines follow describing the strength of each soldier.After that <b>Q</b> more lines are given each 
containing <b>S</b> and <b>K</b> as described in the problem.

<h3>Output</h3>

For each query output a line containing <b>YES</b> or <b>NO</b> accordingly the 
strength <b>S</b> can be obtained using <b>K</b> members.

<h3>Constrains:</h3>
<ul>
<li><b>1</b>&lt;=<b>N</b>&lt;=<b>100</b>
</li><li><b>Strength of each member is between 1 and 1000 inclusive.</b>
</li><li><b>1</b>&lt;=<b>Q</b>&lt;=<b>1000</b>
</li><li><b>1</b>&lt;=<b>S</b>&lt;=<b>total strength of all members</b>
</li><li><b>1</b>&lt;=<b>K</b>&lt; <b>N/2</b>
</li></ul>

<h3>Example:</h3>

<h3>Input:</h3>
5 6
3 2 4 5 2
4 2
4 1
5 3
5 2
8 2
8 4

<b>Output:
YES
YES
NO
YES
YES
NO</b>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/teamcoadies10">teamcoadies10</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-04-2013</td>
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