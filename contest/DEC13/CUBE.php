<?php require("../../includes/header.php"); ?><h1>Cube Cakes</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/CUBE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/CUBE.pdf">Russian</a>.</h3>
<p>This winter our chef plans to unveil his latest creation - Cube Cakes. As the name suggests, this new delicacy is a cake in the form of a perfect cube with secret ingredients from the chef's inventory. Since it is a relatively new creation of the chef, he wants to master the ability to make perfectly identical Cube Cakes. For this, he wants you to write a program that will calculate the similarity between two given Cube Cakes. </p>
<p> <br /></p>
<p> Each Cube Cake can be represented as a cube of size <b>N</b> where each cell of the cube contains a lowercase alphabet ('a'-'z').  The similarity between two Cube Cakes ( of size <b> N </b>  each ) is defined as the maximum sized <i>common</i> sub-cube that exists at exactly the same position in both the Cube Cakes. Two sub-cubes are said to be <i>common</i> if at-least <b>P%</b> of their corresponding characters are equal. You need to find the size <b>S</b> of the largest such sub-cube and also the number of <i>common</i> sub-cubes of size <b>S</b> in the Cube Cake.</p>
<h3>Input</h3>
<p> The first line contains an integer <b>T</b> denoting the number of test cases. Then the descriptions of testcases follows. </p>
<p> The first line of each testcase contains integers <b>N</b> (the size of the Cube Cakes <b>A</b> and <b>B</b> that are to be compared) and <b> P</b>.<br />
The next line contains a string <b>S<sub>A</sub></b> containing <b> N<sup>3</sup> </b> lowercase characters ('a'-'z'), where the <b> A[i][j][k]<sup>th</sup></b> element of the Cube Cake <b>A</b> is given by <b>S<sub>A</sub>[ i*N*N + j*N + k ]</b> where <b>0</b> ≤ <b> i, j, k </b>  ≤ <b> N-1 </b>.<br />
The next line contains a string <b>S<sub>B</sub></b> containing <b> N<sup>3</sup> </b> lowercase characters ('a'-'z'), <b>S<sub>B</sub></b> is the description of the Cube Cake <b>B</b> in the way analogical to <b>A</b>.
</p>
<h3>Output</h3>
<p> For every test case, print in a single line the similarity between the two Cube Cakes <b> S </b> and the number of <i>common</i> sub-cubes of size <b>S</b>.<br />
If there is no <i>common</i> sub cube present, just print <b>-1</b> in a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b> 1 </b> ≤ <b>T</b> ≤ <b> 40</b></li>
<li><b> 1 </b> ≤ <b>N</b> ≤ <b> 40</b></li>
<li><b> 0 </b> ≤ <b>P</b> ≤ <b> 100</b></li>
<li><b> | S<sub>A</sub> |, |S<sub>B</sub> |  </b> = <b> N<sup>3</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 40
abcdefgh
abcdefgh
2 100
abcdefgh
ccccccch
1 100
a
b

<b>Output:</b>
2 1
1 2
-1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br /><br />
Since both the Cube Cakes are identical, the whole cube matches and hence the similarity is <b>2</b>. Also, there is only one sub-cube of size <b>2</b>.
 </p>
<p><b>Example case 2.</b><br /><br />
Since <b>P</b> is <b>100</b>, all characters in the sub-cube must match. The sub cube <b>'c'</b> and <b>'h'</b> each of size <b>1</b> are the largest cube satisfying this criteria. Hence the similarity is <b> 1 </b> and corresponding count is <b>2</b> .</p>
<p><b>Example case 3.</b><br /><br />
Since no  characters match in the cube, we cannot find a <i>common</i> subcube here. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/viv001">viv001</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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