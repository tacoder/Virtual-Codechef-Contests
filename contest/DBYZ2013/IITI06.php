<?php require("../../includes/header.php"); ?><h1>Colouring Drapes</h1><div class="content">

<p>The Yule Ball is approaching and the giant ballroom must be decorated. Professor Flitwick has entrusted Harry with the decoration of the giant ballroom. The ballroom will be decorated with <b>N</b> drapes (numbered from 1 to <b>N</b>). The height of the ith drape is <b>A[i]</b>. The drapes are sorted in non-increasing order of height (<b>A[i]</b>>=<b>A[i+1]</b> for all <b>i</b> where 1 &lt;= <b>i</b> &lt;<b>N</b>). There are <b>N</b> colours (numbered from 1 to <b>N</b>) available for decoration. Each drape must be coloured using one of these <b>N</b> colours. The cost of colouring drape <b>i</b> with colour <b>c</b> is <b>A[i]*c</b>.</p>
<p>Decorating the ballroom is a big responsibility and so Professor Flitwick has decided to first test Harry to ensure that he is up to the task. Professor Flitwick will ask Harry <b>Q</b> queries, each of which Harry must answer correctly. Each query consists of 3 integers : <b>l</b>, <b>r</b> and <b>k</b>. This means that only the drapes numbered from <b>l</b> to <b>r</b> (inclusive) must be coloured such that the total cost of the colouring is atmost <b>k</b>. Harry's objective is to make the colouring as colourful as possible. The colourfulness of a colouring is defined as the number of distinct colours which appear atleast once in the colouring. The objective is to return the maximum possible colourfulness under the cost constraint.</p>
<p>Formally, if <b>C</b> is a colouring of the drapes from <b>l</b> to <b>r</b> (inclusive) and <b>c</b> is a colour, f(<b>c</b>,<b>C</b>)=1 if there is atleast one drape which is coloured with colour <b>c</b> under the colouring <b>C</b>. Otherwise f(<b>c</b>,<b>C</b>)=0. colourfulness(<b>C</b>) is defined as the sum of <b>f(1,<b>C</b>)+f(2,<b>C</b>)+....+f(N,C)</b>. cost(<b>C</b>) is the sum of the costs of colouring the drapes from <b>l</b> to <b>r</b> (inclusive) (The cost of colouring a single drape is defined above). The correct answer to the query is the maximum value of colourfulness(<b>C</b>) over all colourings <b>C</b> which satisfy cost(<b>C</b>)&lt;=<b>k</b>. If there is no valid colouring which satisfies cost(<b>C</b>)&lt;=<b>k</b>, then the correct answer to the query is "-1" (quotes for clarity).</p>
<h3>Input</h3>
<p>The first line of input contains a single integer <b>N</b>.<br />
The second line contains <b>N</b> integers, <b>A[1], A[2] .. A[N]</b>. These will be sorted in non-increasing order.<br />
The third line countains a single integer <b>Q</b>.<br />
<b>Q</b> lines follow. Each of these lines consists of 3 space-seperated integers : <b>l</b>,<b>r</b>,<b>k</b>.</p>
<h3>Output</h3>
<p>Correctly formatted output consists of <b>Q</b> lines. The ith line contains a single integer : the answer to the ith query.<br />
Note : If the cost constraint does not permit any colouring, the answer is -1.
</p>
<h3>Constraints</h3>
<p>1&lt;=<b>N</b>&lt;=5000</p>
<p>1&lt;=<b>A[i]</b>&lt;=10^9</p>
<p>1&lt;=<b>Q</b>&lt;=100000</p>
<p>1&lt;=<b>l</b>&lt;=<b>r</b>&lt;=<b>N</b></p>
<p>0&lt;=<b>k</b>&lt;=10^18
</p>
<h3>Example</h3>
<pre><b>Input:</b>
<p>6
12 8 6 3 2 1
3
1 4 28
1 4 40
1 4 200
</p>
<b>Output:</b>
<p>-1
2
4
</p>
</pre><h3>Explanation</h3>
<p>1.The minimum cost of colouring the drapes numbered from 1 to 4 is 12+8+6+3=29. So the answer to the first query is -1.</p>
<p>2.One way to use 2 distinct colours to colour the drapes from 1 to 4 is to colour drape 3 with colour 2 and the rest with colour 1. The cost of this equals 12+8+6*2+3=35.</p>
<p>3.Since the cost constraint is large, we can afford to keep all 4 colours distinct.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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