<?php require("../../includes/header.php"); ?><h1>Sereja and Two Arrays</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/mandarin/LFEB14A.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/russian/LFEB14A.pdf">Russian</a>.</h3>
<p>Sereja and Arrays </p>
<p>Sereja have an array that consist of <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>. Also Sereja have an array that consist of m integers <b>b[1], b[2], ..., b[m]</b>. Sereja make next operations:
</p><p> </p>
<p>- <b>random_shuffle(b)</b> — shuffle elements of <b>b</b>
</p><p> </p>
<p>- <b>random_merge(a, b)</b> — merge array <b>a</b> and <b>b</b> to array <b>a</b>. From all possible merges Sereja chooses a random one. For better understanding you can imagine, that merged array is sequence <b>q</b> of <b>n+m</b> elements, each element if either zero or one. It contains exactly <b>n</b> zeroes and <b>m</b> ones. Then zeroes are replaced with elements of <b>a</b>, and ones are replaced with elements of <b>b</b> (without changing their relative order inside initial sequences).
</p><p> </p>
<p>Now Sereja want to know expected number of inversions in array a after described operations. Inversion is a pair <b>(i, j) (1 ≤ i &lt; j ≤ n + m)</b> such that <b>a[i] &gt; a[j]</b>.</p>
<h3>Input</h3>
<p>First line contain number <b>T</b> — number of testcases. <b>T</b> tests follow. First line of each testcase contain two integers <b>n</b> and <b>m</b>. Next line contain <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>. Next line contain <b>m</b> integers <b>b[1], b[2], ..., b[m]</b>.
</p>
<h3>Output</h3>

<p>For each testcase print expected number of inversions.
</p><p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7</b></li>
<li><b>1</b> ≤ <b>n,m</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>a[i], b[i]</b> ≤ <b>10^5</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5 3
1 5 4 3 2
2 6 3
10 9
10 3 6 4 8 4 1 9 7 2
9 8 3 3 10 8 2 9 2
<b>Output:</b>
13.833333333
87.818181818
</pre><p> </p>
<h3>Note</h3>
<p><b>Test #0-1 (25 points): n,m ≤ 10 </b> </p>
<p><b>Test #2 (25 points): n,m ≤ 1000 </b> </p>
<p><b>Test #3-4 (50 points): n,m ≤ 100000 </b> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-02-2014</td>
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