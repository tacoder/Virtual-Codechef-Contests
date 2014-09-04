<?php require("../../includes/header.php"); ?><h1>Maxim and Progressions</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/MAXPR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/MAXPR.pdf">Russian</a>.</h3>
<p>Maxim likes arithmetic progressions and does not like sequences which are not arithmetic progressions.</p>
<p>Now he is interested in the question: how many subsequences of his sequence <b>a</b>, consisting of <b>n</b> elements, are not arithmetic progressions.</p>
<p>Sequence <b>s[1],  s[2],  ...,  s[k]</b> is called a subsequence of sequence <b>a[1],  a[2],  ...,  a[n]</b>, if there will be such increasing sequence of indices <b>i[1], i[2], ..., i[k] (1  ≤  i[1]  &lt;  i[2]  &lt; ...   &lt;  i[k]  ≤  n)</b>, that <b>a[i[j]]</b>  =  <b>s[j]</b>. In other words, sequence <b>s</b> can be obtained from the <b>a</b> by deleting some elements.</p>
<p>Sequence <b>s[1],  s[2],  ...,  s[k]</b> is called an arithmetic progression, if it can be represented as : </p>
<li><b>s[1]</b> = <b>p</b>, where <b>p</b> — some integer;</li>
<li><b>s[i]</b> = <b>p + (i - 1)·q (i &gt; 1)</b>, where <b>q</b> — some integer.</li>
<p>In particular, the empty sequence or a sequence of one element is an arithmetic progression.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. </p>
<p>The first line of each test case contains an integer <b>n</b> — the number of elements in the sequence. The next line of the test case contains <b>n</b> integer, <b>a[1], a[2], ..., a[n]</b> — elements of the sequence.
</p>
<h3>Output</h3>
<p>For each test case print the remainder of the division the answer on <b>1000000007 (10^9 + 7)</b>. All answers print on different lines. </p>
<h3>Constraints</h3>
<p> <b>1 ≤ T ≤ 10</b></p>
<p> 1 ≤ n ≤ 200000</p>
<p> 1 ≤ a[i] ≤ 100</p>
<p></p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
1
3
1 2 1

<b>Output:</b>
0
1

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-05-2013</td>
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