<?php require("../../includes/header.php"); ?><h1>Chef and Walking on the rectangle</h1><div class="content">
<p>Chef likes rectangles. Among all possible rectangles, he loves rectangles that can be drawn like a grid, such that they have <strong>N</strong> rows and <strong>M</strong> columns. Grids are common in Byteland. Hence, Chef has drawn such a rectangle and plans on moving around in it.</p>
<p>The rows of the rectangle are labeled from <b>1</b> to <b>N</b> from top to bottom. The columns of the rectangle are labeled form <b>1</b> to <b>M</b> from left to right. Thus, the cell in the <b>top left</b> can be denoted by <b>(1,1)</b>. The <b>5<sup>th</sup></b> cell from the left in the <b>4<sup>th</sup></b> row form the top can be denoted by <b>(4,5)</b>. The <b>bottom right</b> cell can be denoted as <b>(N,M)</b>.</p>
<p>Chef wants to move from the cell in the <b>top left</b> to the cell in the <b>bottom right</b>. In each move, Chef may only move one cell right, or one cell down. Also, Chef is not allowed to move to any cell outside the boundary of the rectangle.</p>
<p>Of course, there are many ways for Chef to move from <b>(1,1)</b> to <b>(N,M)</b>. Chef has a curious sport. While going from <b>(1,1)</b> to <b>(N,M)</b>, he drops a stone on each of the cells he steps on, except the cells <b>(1,1)</b> and<br />
<b>(N,M)</b>. Also, Chef repeats this game exactly <strong>K</strong> times.</p>
<p>Let us say he moved from <b>(1,1)</b> to <b>(N,M)</b>, exactly <b>K</b> times. At the end of all the <b>K</b> journeys, let the number of stones, in the cell with the maximum number of stones, be equal to <b>S</b>. Chef wants to know what is the smallest possible value for <b>S</b>.</p>
<h3>Input</h3>
<p>The first line contains single integer <b>T</b>, the number of test cases. Each of the next <b>T</b> lines contains <b>3</b> integers <b>N, M and K</b>, respectivily.</p>
<h3>Output</h3>
<p>For each test case, output the smallest value possible for <b>S</b>, if the Chef chooses the <b>K</b> paths smartly.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 100</b><br />
<b>1 ≤ N, M, K ≤ 70</b>
</p>
<h3>Sample</h3>
<pre>
<b>Input</b>
3
2 2 1
3 3 2
1 5 12

<b>Output</b>
1
1
12

</pre><h3>Explanation</h3>
<p><b>Test Case 1:</b> Chef may choose any way. The maximum value on any cell would be 1.</p>
<p><b>Test Case 2:</b> If Chef selects two paths that have a common cell, such as</p>
<p>
<ul>
<li><b>(1,1)-&gt;(1,2)-&gt;(2,2)-&gt;(3,2)-&gt;(3,3)</b></li>
<li><b>(1,1)-&gt;(2,1)-&gt;(2,2)-&gt;(3,2)-&gt;(3,3)</b></li>
</ul>
</p>
<p>Then the value of <b>S</b> will be equal to <b>2</b>, since the number of stones in <b>(2,2)</b> and <b>(3,2)</b> is equal to 2. But, if Chef selects two paths which do not have any common cells, such as</p>
<p>
<ul>
<li><b>(1,1)-&gt;(1,2)-&gt;(1,3)-&gt;(2,3)-&gt;(3,3)</b></li>
<li><b>(1,1)-&gt;(2,1)-&gt;(3,1)-&gt;(3,2)-&gt;(3,3)</b></li>
</ul>
</p>
<p>Then the value of <b>S</b> will be equal to <b>1</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-05-2013</td>
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