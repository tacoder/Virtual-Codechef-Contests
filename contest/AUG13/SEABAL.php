<?php require("../../includes/header.php"); ?><h1>Sereja and Ballons</h1><div class="content">
<p>Sereja has n boxes with balloons. Boxes are numbered with integers from <b>1</b> to <b>n</b>. The first box contains <b>a[1]</b> balloons,    the second- <b>a[2]</b> balloons and so on.</p>
<p>Also Sereja wrote down m pairs of the number <b>(l[1], r[1]), (l[2], r[2]), ..., (l[m], r[m])</b> on a piece of paper. Now    Sereja decided to play and began to burst the balloons in the boxes. At every step Sereja bursts one balloon from    some box and wants to know : what is the count of the indices <b>i (1 ≤ i ≤ m)</b>, that all balloons in the boxes with the    indices from <b>l[i]</b> to <b>r[i]</b> are already bursted.</p>
<p>Please, help Sereja.</p>
<h3>Input</h3>
<p>The first line contains numbers <b>n</b> and <b>m</b> — the number of the boxes and the number of the pair of numbers. The next    line contains <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>.</p>
<p>The following <b>m</b> lines contain <b>m</b> pairs of numbers <b>(l[1], r[1]), (l[2], r[2]), ..., (l[m], r[m])</b>.</p>
<p>The next line contains number <b>k</b> — the number of times, when Sereja had his balloon bursted. The next  <b>k</b> line contains    integers <b>x[1], x[2], ..., x[k]</b>. Index of the box, in what Sereja bursted a balloon at the step number <b>i (1 ≤ i ≤ k)</b>,    is denoted as <b>y[i]</b>., which can be found as: <b>y[i] = x[i] + ans[i - 1]</b>, wherein <b>ans[0] = 0</b>, аnd <b>ans[i] (i&gt;0)</b> — is the    answer on the problem after ith bursting of the balloons.</p>
<h3>Output</h3>
<p>For each test case, print <b>k</b> lines — the answers after every steps.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ n, m ≤ 10^5</b></li>
<li><b>1 ≤ a[i] ≤ 100000</b></li>
<li><b>1 ≤ l[i] ≤ r[i] ≤ n</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 3
1 1 1 1 1
5 5
2 2
1 3
5
4
2
0
2
3

<b>Output:</b>
0
1
1
2
3
</pre><p>
<b>Update:</b></p>
<p>You may assume that, y[i] &lt;= n and k &lt;= 100000</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-06-2013</td>
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