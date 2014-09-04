<?php require("../../includes/header.php"); ?><h1>Sereja and Equality</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/SEAEQ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/SEAEQ.pdf">Russian</a>.</h3>
<p>Sereja call two arrays <b>A</b> and <b>B</b> with length <b>n</b> almost equal if for every <b>i (1 &lt;= i &lt;= n) CA(A[i]) = CB(B[i])</b>. <b>CX[x]</b> equal to number of index <b>j (1 &lt;=j &lt;= n)</b> such that <b>X[j] &lt; x</b>.</p>
<p> </p>
<p>For two permutations <b>P1</b> and <b>P2</b> Sereja found new function <b>F(P1, P2)</b> that is equal to number of pairs <b>(l,r) (1 &lt;= l &lt;= r &lt;= n)</b> such that <b>P1[l..r]</b> is almost equal to <b>P2[l..r]</b> and array <b>P1[l..r]</b> contain not more then <b>E</b> inversions. </p>
<p> </p>
<p>Now Sereja is insterested in next question: what is the sum <b>F(P1,P2)</b> by all possible permutations <b>P1, P2</b> from <b>n</b> elements.</p>
<p> </p>
<h3>Input</h3>
<p>First line contain integer <b>T</b> - number of testcases. <b>T</b> tests follow. The only line of each testcase contain integers <b>n, E</b>.</p>
<h3>Output</h3>
<p>For each testcase output answer modulo <b>1000000007 (10^9+7)</b>.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>E</b> ≤ <b>1000000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
2 2
2 1
2 0
1 1

<b>Output:</b>
10
10
9
1

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-03-2014</td>
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