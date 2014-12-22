<?php require("../../includes/header.php"); ?><h1>Chef and Strange Graph</h1><div class="content">
<h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/mandarin/GERALD06.pdf">here</a></h3>
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/russian/GERALD06.docx">here</a></h3>
<h3>Problem Statement</h3>
<p>Chef has a connected undirected graph <b>G</b> without multiedges and self-loops. A graph is called connected if there exists a path between any two vertices of the graph. This graph, <b>G</b> has an awesome property: it contains at least one vertex with degree at least 4. <br /> One day Chef was playing with his graph. He constructed a graph <b>L(G)</b> based on the graph <b>G</b>.<br />
The vertices of graph <b>L(G)</b> are the edges of graph <b>G</b>. Two vertices in the graph <b>L(G)</b> are connected with an undirected edge if and only if the<br />
corresponding edges in graph <b>G</b> share a common vertex.<br /></p>
<p>Today Chef has lost his favorite graph <b>G</b>. But he has the graph <b>L(G)</b>. Please help Chef, restore the graph <b>G</b> from the graph <b>L(G)</b>.</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
The first line of each test case contains two integers <b>N</b> and <b>M</b> - the number of vertices in <b>L(G)</b> and the number of edges in it. The next <b>M</b> lines<br />
contain description of the edges. Each line contains two integers <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> - indices of vertices, connecting by the current edge. Consider <b>L(G)</b><br />
vertices are numbered from <b>1</b> to <b>N</b>.
</p>
<h3>Output</h3>
<p>For each test case in the first line output an integer <b>K</b> - the number of vertices in the graph <b>G</b>. The next <b>N</b> lines should contain the description of the edges of the graph <b>G</b> (the <b>i</b>-th edge of <b>G</b> should correspond to the <b>i</b>-th vertex of <b>L(G)</b>).<br />
You should number vertices in graph <b>G</b> from <b>1</b> to <b>K</b>. If there are multiple answers you can print any of them. Also you can insert whitespaces in your output if you want.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T, N, M</b> ≤ <b>5000</b>;</li>
<li><b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>N</b>;</li>
<li>Given graph <b>L(G)</b> is connected and doesn't contain multiedges and self-loops.</li>
<li>It's guaranteed that sum of all <b>M</b> values for all test cases doesn't exceed <b>5000</b>.</li>
<li>It's guaranteed that for each test the answer exists.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4 6
1 2
2 3
3 4
4 1
1 3
2 4
5 8
1 2
2 3
3 4
4 1
1 3
2 4
1 5
2 5

<b>Output:</b>
5
2 1
1 3
1 4
1 5
5
1 2
1 3
1 4
1 5
2 3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gerald">gerald</a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-12-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>