<?php require("../../includes/header.php"); ?><h1>Tree Product</h1><div class="content">

<p>Given a complete binary tree with the height of H, we index the nodes respectively top-down and left-right from 1. The i-th node stores a positive integer V<sub>i</sub>. Define P<sub>i</sub> as follows: P<sub>i</sub>=V<sub>i</sub> if the i-th node is a leaf, otherwise P<sub>i</sub>=max(V<sub>i</sub>*P<sub>L</sub>, V<sub>i</sub>*P<sub>R</sub>), where L and R are the indices of the left and right children of i, respectively. Your task is to caculate the value of P<sub>1</sub>.
</p>
<h3>Input</h3>
<p>There are several test cases (fifteen at most), each formed as follows:</p>
<ul>
<li>The first line contains a positive integer H (H ≤ 15).</li>
<li>The second line contains 2<sup>H</sup>-1 positive integers (each having a value of 10<sup>9</sup> at most), the i-th integer shows the value of V<sub>i</sub>.</li>
</ul>
<p>The input is ended with H = 0.
</p>
<h3>Output</h3>
<p>For each test case, output on a line an integer which is the respective value of P<sub>1</sub> found, by modulo of 1,000,000,007.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 2 3
3
3 1 5 2 6 4 7
0

<b>Output:</b>
3
105

</pre><p>
Explanation:<br />
The second test case is constructed as follows:</p>
<pre><code>
     3
    / \
   /   \
  1     5
 / \   / \
2   6 4   7
</code></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2011</td>
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