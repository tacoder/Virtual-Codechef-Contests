<?php require("../../includes/header.php"); ?><h1>Fibonacci Numbers on Tree</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/FIBTREE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/FIBTREE.pdf">Russian</a>.</h3>
<p>In mathematical terms, the sequence <b>F[N]</b> of Fibonacci numbers is defined by the recurrence relation <b>F[N]</b> = <b>F[N-1]</b> + <b>F[N-2]</b>, with seed values <b>F[1] = 1</b>,<b>F[2] = 1</b>.</p>
<p>Today, Chef gives you a rooted tree, consisting of <b>N</b> nodes. At first, the node <b>1</b> is the root. The nodes are numbered from <b>1</b> to <b>N</b>, and each node has an integer that initially equals to <b>0</b>. Then, Chef asks you to perform <b>M</b> queries. </p>
<p>The queries are as follows:</p>
<ul>
<ul>
<li>
<p><b>A x y</b></p>
</li>
<p>Add <b>F[1]</b> to the integer, associated with the node <b>x</b>, then add <b>F[2]</b> to the integer, associated with the second node on the way from <b>x</b> to <b>y</b>, then add <b>F[3]</b> to the integer, associated with the third node on the way from <b>x</b> to <b>y</b>, and so on. As you know, there is only one simple path from <b>x</b> to <b>y</b>.</p>
</ul>
<ul>
<li>
<p><b>QS x y</b></p>
</li>
<p>Let node <b>x</b> be the root of the tree, output the sum of all integers, associated with the nodes in the subtree of the node <b>y</b>, modulo <b>1000000009(10<sup>9</sup>+9)</b>.</p>
</ul>
<ul>
<li>
<p><b>QC x y</b></p>
</li>
<p>Output the sum of all the integers, associated with the nodes on the way from <b>x</b> to <b>y</b>, modulo <b>1000000009(10<sup>9</sup>+9)</b>.</p>
</ul>
<ul>
<li>
<p><b>R x</b></p>
</li>
<p>All the integers associated with the nodes return to the state after the <b>x</b>-th query. If <b>x</b> is <b>0</b>, then all of them become equal to <b>0</b>, as in the very beginning.</p>
</ul>
</ul>
<p> </p>
<h3>Input</h3>
<ul>
<p>The first line of the input consists of two space separated intergers - <b>N</b> and <b>M</b> respectively.</p>
<p>Then, <b>N-1</b> lines follow. These <b>N-1</b> lines describe the tree structure. Each line consists of two intergers - <b>x</b> and <b>y</b>, and that means that there is an edge between the node <b>x</b> and the node <b>y</b>.</p>
<p>Then, <b>M</b> lines follow. Every single line denotes a single query, which has one of the following forms: (See the sample for the detailed explanation)</p>
<ul>
<li>
			<b>A x<sub>1</sub> y</b>
		</li>
</ul>
<ul>
<li>
			<b>QS x<sub>1</sub> y</b>
		</li>
</ul>
<ul>
<li>
			<b>QC x<sub>1</sub> y</b>
		</li>
</ul>
<ul>
<li>
			<b>R x<sub>1</sub></b>
		</li>
</ul>

<p>As you can see, the number <b>x</b> isn't given to you directly. For all queries, actual number <b>x</b> will be equal to <b>x<sub>1</sub></b> xor <b>lastans</b>, where lastans denotes the last number that you have output, or <b>0</b> if you haven't output any numbers yet.</p>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<p>For each query of the type <b>QS</b> or <b>QC</b>, output the answer modulo <b>10<sup>9</sup>+9</b></p>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li>
		<b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>100000</b>
	</li>
<li>
		<b>1</b> ≤ <b>x</b>, <b>y</b> ≤ <b>N</b>
	</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 6
1 2
1 3
3 4
3 5
A 4 2
A 2 5
QS 4 3
QC 12 4
R 6
QC 6 4

<b>Output:</b>
13
7
4
</pre><p> </p>
<h3>Explanation</h3>
<ul>
<p>Let’s denote the first state of integers as <b>0 0 0 0 0</b>, where the <b>i</b>-th interger means the integer associated with the node <b>i</b>.</p>
<p>In the first query “<b>A 4 2</b>”, the actual number is <b>x = 4 xor 0 = 4</b>. Hence the state will be <b>2 3 1 1 0</b> after this query.</p>
<p>After the second query “<b>A 2 5</b>”, the state will be <b>3 4 3 1 3</b> for the similar reason.</p>
<p>In the next query, the answer is <b>3+4+3+3=13</b>.</p>
<p>In the next query, the actual number is <b>x = 12 xor 13 = 1</b>, the answer is <b>3+3+1=7</b>.</p>
<p>In the query “<b>R 6</b>”, the actual number is <b>x = 6 xor 7 = 1</b>, the state will be roll backed to <b>2 3 1 1 0</b>.</p>
<p>At last, the actual number is <b>x = 6 xor 7 = 1</b>, the answer is <b>2+1+1=4</b>.</p>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/dzy493941464">dzy493941464</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-06-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>