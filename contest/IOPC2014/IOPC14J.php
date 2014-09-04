<?php require("../../includes/header.php"); ?><h1>Bomberman and the attack of Emperor Terrorin</h1><div class="content">
<p dir="ltr">The Fiendish Bombers, unleashed by Emporer Terrorin, have invaded Bungeling Empire in Bomber Nebula. You are Dr.Ein, the scientist assisting the Bomberman. Help him to save Planet Bomber!</p>
<p dir="ltr">Consider the Empire as <strong>(N+2)x(N+2)</strong> maze free of any rocks and obstacles. The Fiendish Bombers have reached the borders of the Empire. They are present on all border cells of the maze except the corners (they don’t like to be cornered :P). Now consider the remaining NxN maze.</p>
<p dir="ltr">Some cells are with counter-explosive devices and so bombs cannot be planted there. The bombs can be planted anywhere on the remaining maze. Because of one of the new invention, the Fire, ability of the Bomberman’s bomb is infinite. That is, if it explodes at (a,b) it will destroy enemies from all the cells on the horizontal line through (a,b) and on the vertical line passing through (a,b). Note that it would not affect <strong>any</strong> of the counter-explosive devices.</p>
<p dir="ltr">You have an encrypted connection with the Bomberman and can message him (a,b), the coordinates where a bomb can be planted. The cost of each message is <strong>M</strong>. But the problem is, you forgot to agree upon the directions of the axis while deciding the origin.  So, when you message (a,b), Bomberman plants 2 bombs - on (a,b) and on (b,a) (provided they are distinguishable). Also, it is ensured that there is a counter-explosive device on (a,b) if and only if there is a counter-explosive device on (b,a). Your task is to minimize the cost of eliminating all enemies.</p>
<p dir="ltr">Print a single integer, the cost of eliminating all the <strong>4*N</strong> enemies. Print <strong>IMPOSSIBLE</strong> if it is impossible to do so.</p>
<p><strong><span>Input</span></strong></p>
<ul>
<p dir="ltr">
<li>
There are several test cases.</li>
</p>
<p dir="ltr">
<li>Each test case begins with two integers:  <strong>N</strong> - denoting size of the grid and <strong>M</strong> - denoting cost of single message.</li>
</p>
<p dir="ltr">
<li><strong>N</strong> lines follow. Each containing a string of <strong>N</strong> characters describing the cells of corresponding row. “<strong>#</strong>” denotes cell with counter-explosive device and “<strong>.</strong>” denotes free cell.</li>
</p>
<p dir="ltr">
<li>Input ends with <strong>N=0</strong> and <strong>M=0</strong>. which should not be processed.</li>
</p>
</ul>
<h3>Output</h3>
<ul>
<p dir="ltr">
<li>For each testcase, output a single line, consisting of string "Case#" followed by the case number, a colon and the solution of the corresponding case.</li>
</p>
</ul>
<h3>Constraints</h3>
<ul>
<li>1 ≤ N ≤ 100<b><br />
</b></li>
<li>1 ≤ M ≤1000</li>
<li>Sum of <strong>N</strong> over all test cases ≤ 2000</li>
</ul>
<h3>Example</h3>
<pre><b>Sample Input:</b></pre><p><br /></p>
<p dir="ltr">
2 1<br /><br />
#.<br /><br />
.#<br /><br />
2 1<br /><br />
##<br /><br />
##<br /><br />
0 0<br />
</p>
<p><br /></p>
<pre><b>Sample Output:</b></pre><p><br /><br />
Case#1: 1<br /><br />
Case#2: IMPOSSIBLE<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>