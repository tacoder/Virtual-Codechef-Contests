<?php require("../../includes/header.php"); ?><h1>Polo the Penguin and the Tree</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK39/russian/PPTREE.pdf">here</a></h3>
<p>Polo, the Penguin, likes the XOR operation. Please read <a href="#NOTE"><b>NOTE</b></a> if you are not familiar with XOR operation. </p>
<p>XOR-sum of a list of numbers is the result of XOR-ing all of them. XOR-sum of (<b>A[1]</b> XOR <b>A[2]</b> XOR ... XOR <b>A[N]</b>) is defined as <b>A[1]</b> XOR (<b>A[2]</b> XOR (<b>A[3]</b> XOR ( ... XOR <b>A[N]</b>))).</p>
<p>Apart of that, Polo, the Penguin, likes trees. He has a weighted tree consisting of <b>N</b> vertices.</p>
<p>He also likes to choose some pair of vertices <b>U</b> and <b>V</b> and find XOR-sum of all weights on the simple path from <b>U</b> to <b>V</b>. Help him to find the maximal number he can get .</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains a single integer <b>N</b> denoting the number of vertices in the tree. The next <b>N-1</b> lines contain description of edges of the tree, one edge per line in format <b>U[i] V[i] W[i]</b>, where <b>U[i]</b> and <b>V[i]</b> are the indices of the vertices of edge and <b>W[i]</b> is the weight of the edge. Vertices are numbered from <b>1</b> to <b>N</b>, inclusive.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000</b></li>
<li><b>0</b> ≤ <b>W[i]</b> ≤ <b>1,000,000,000</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 3
3 1 2
4
1 2 2
1 3 2
4 3 1

<b>Output:</b>
3
3
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> In this case there are tree ways to choose pair of vertices:</p>
<ul>
<li><b>(1, 2)</b>: The only edge you path is edge <b>(1, 2)</b> with weight <b>3</b>. The XOR-sum is simply <b>3</b>.</li>
<li><b>(1, 3)</b>: The only edge you path is edge <b>(1, 3)</b> with weight <b>2</b>. The XOR-sum is simply <b>2</b>.</li>
<li><b>(2, 3)</b>: There are two edges on the path in this case: <b>(2, 1)</b> and <b>(1, 3)</b> with weights <b>3</b> and <b>2</b>, respectively. The XOR-sum is <b>3</b> XOR <b>2</b> = <b>1</b>.</li>
</ul>
<p>So the maximal value Polo can get is <b>3</b>.
</p>
<p><b>Example case 2.</b> If Polo chooses vertices <b>1</b> and <b>4</b>, then the XOR-sum is equal to <b>2</b> XOR <b>1</b> = <b>3</b>. This is the maximal value he can get in this case.
</p>
<p><br /></p>
<h3 id='NOTE'>NOTE</h3>
<p><a href="http://en.wikipedia.org/wiki/Exclusive_or">XOR operation</a> is a bitwise "Exclusive OR" operation performed on two integers in binary representation. First, the shorter number is prepended with leading zeroes until the numbers have equal size in binary. Then the resulting number (also in binary) contains <b>0</b> in all positions where the corresponding bits coincide, and <b>1</b> on the rest of the positions.</p>
<p> For example, <b>3</b> XOR <b>5</b> = <b>011<sub>2</sub></b> XOR <b>101<sub>2</sub></b> = <b>110<sub>2</sub></b> = <b>6</b>. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece">rustinpiece</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-10-2013</td>
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