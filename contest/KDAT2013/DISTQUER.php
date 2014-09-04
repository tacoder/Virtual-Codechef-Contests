<?php require("../../includes/header.php"); ?><h1>Space Adventure</h1><div class="content">

<p>JAYPEE SPACE ADMINISTRATION (JSA) in 2013 decided to send Chef Po to the planet Jupiter’s moon. When he landed on the moon he saw a very hap-hazard township which was developed by their civil alienoic engineers which existed on that moon. There were exactly N number of houlien(houses where aliens lived), each houlien is denoted by a number 1 to N. Total (N-1) number of roads existed on the moon such that each houlien is connected to all other houliens by at least one path. Each road was of different length (l1,l2……l(N-1)).Now JSA will send multiple queries to Chef, each query will be of the form (U,V) you have to help our Chef to find out the distance between Uth and the Vth houlien. </p>
<h3>Input</h3>
<p>First line of input contains N, the number of houliens. Each of the next N line contains a 3 numbers, X Y and W i.e. there is a path between houlien X and Y and length between X and Y is W. Then after these N lines there is number Q, number of queries. Each query is of the form u v.</p>
<h3>Output</h3>
<p>For each query print the shortest distance between houlien u and v.</p>
<h3>Constraints</h3>
<p>N&lt;=100000<br />Q&lt;=N/2<br />W&lt;=10000
</p>
<h3>Example</h3>
<pre><b>Input:</b>
10
2 1 67
3 1 1
4 2 24
5 2 58
6 2 64
7 5 45
8 6 27
9 1 91
10 7 42
5
8 7
2 5
3 4
2 7
9 6<br />
<b>Output:</b>
194
58
92
103
222
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>2.5 sec</td>
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