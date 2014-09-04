<?php require("../../includes/header.php"); ?><h1>Number Transform</h1><div class="content">
<h3 id="problemdescription">Problem Description</h3>
<p>In the world of Mathematics, there are ordinary numbers and there are special numbers. The special numbers are Transformers. The transformers are of two types - Autobots and Decepticons. Autobots have the task of saving the number-kind from the evil intentions of Decepticons.<br /><br /></p>
<p>A number C is said to be equivalent to another number D if C%k = D%k, where k is a given parameter.<br /><br /></p>
<p>The Transformers are called so because of their special ability to transform to something else. Now, given a value Q, a transformer N wishes to transform to another value P such that P is equivalent to Q.<br />However, like all mortal beings, they too have restrictions, they can only take some particular transformations.<br /><br /></p>
<p>The following transformations are allowed <br /><br />
N -&gt; N + a <br /><br />
N -&gt; N - b <br /><br />
N -&gt; N * c <br /><br />
N -&gt; N % d <br /><br /></p>
<p>You have to report minimum number of steps to transform to such a value P (which is equivalent to Q) using the above transformations, or print -1 if it is impossible to do so. <br /><br /></p>
<h3>Input Format</h3>
<p>First line contains T, the number of test cases. T lines follow, each containing 7 space separated integers, N, a, b, c, d, k, q.<br /><br /></p>
<h3>Output Format</h3>
<p>The output consists of T lines. Each line contains the output of the corresponding test case, i.e., the minimum number of transformations required or -1, if transformation is not possible.<br /><br /></p>
<h3 id="input">Sample Input</h3>
<pre><code>2
10 3 2 5 5 4 12
5 1 2 3 4 9 14
</code></pre><h3 id="output">Sample Output</h3>
<pre><code>1
0
</code></pre><h3 id="constraints">Constraints</h3>
<pre><code>1 &lt;= T &lt;= 1000
1 &lt;= N,a,b,c,d,k,Q &lt;= 1000
</code></pre><h3 id="explanation">Explanation</h3>
<p>For test case 1:<br />
1. Take 10 modulo 5 -&gt; 0 which equals 12 modulo 4</p>
<p>For test case 2: No operations requires as 5 modulo 9 = 14 modulo 9</p>
<h4 id="note">Note:</h4>
<p><strong>modulo</strong> operation is defined <a href="http://en.wikipedia.org/wiki/Modulo_operation">here</a>. It is commonly implemented as <code>%</code> operator in many programming languages.</p>
<p>All test cases are generated randomly.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-02-2014</td>
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
            <td>C, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>