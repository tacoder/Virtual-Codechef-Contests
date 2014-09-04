<?php require("../../includes/header.php"); ?><h1>Favorite Sub Hair</h1><div class="content">

<table border="0">
<tbody>
<tr>
<td>
<p><img border="0" src="http://farm5.static.flickr.com/4101/5433129276_143f85ce44.jpg" width="221" height="185" /></p>
</td>
<td>
<p align="justify">Little Princess Rapunzel is blessed with long (really looong!) hair, which is golden colored and has healing power. After the end of a long happy story, she marries her lover Flynn. They decide to lead a normal life by getting rid of the mysterious hair, which when cut loses its power and turns brown. There are many colorful beads on her hair in order. Rapunzel has some <b>K</b> favorite colors <b>B</b>[1...K] <br/><br/><br />
To remember good old stories, she wants to keep a part of her hair after its cut. A favorite sub hair is that continuous part of the hair, which has each of her favorite color beads at least once.  </br/></br/></p>
</td>
</tr>
</tbody>
</table>
<p align="justify">For the purpose of this problem, we represent a color as an integer and Hair as an array <b>A</b>[1...N], which has exactly <b>N</b> colored beads in the given order. Could you please tell her the total number of ways she can cut her favorite sub hair (sub-array). Two sub-arrays are different, if their starting or ending index in A differ.</p>
<h3>Input</h3>
<p>First line contains T [ number of test cases, around 10 ]. Each test case is preceded by a blank line, including the 1st case. [ -2,000,000 &lt;= A[i], B[j] ( colors ) &lt;= 2,000,000 ]<br/><br />
Each test case has 4 lines, as described below.<br/><br />
N [ 1 &lt;= N &lt;= 100,000 ]<br/><br />
&lt; Array A : N integers, separated by spaces ><br/><br />
K [ 1 &lt;= K &lt;= 1,000 ]<br/><br />
&lt; Array B : K integers, separated by spaces, her favorite colors, without repetition ><br/></br/></br/></br/></br/></br/></br/></p>
<h3>Output</h3>
<p>For each test case, output the number of different sub-arrays, which has her favorite color appearing at least once, in a separate line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3

4
1 2 3 1
2
1 2

6
10 20 30 40 50 60
1
20

5
1 2 3 4 5
2
2 6

<b>Output:</b>
4
10
0

<b>Explanation:</b>
Case 1 : Favorite sub-arrays in bold [ <b>1 2</b> 3 1 ], [ <b>1 2 3</b> 1 ] , [ 1 <b>2 3 1</b> ], [ <b>1 2 3 1</b> ]
</pre><p><br/><br />
Note: Large input, prefer using scanf/printf to cin/cout<br/><br/><br />
<i>There are multiple test sets, and the judge shows the <b>sum</b> of the time taken over all test sets of your submission, if Accepted.</i></br/></br/></br/></p>
    </div><table border="0">
<tbody>
<tr>
<td>
<p><img border="0" src="http://farm5.static.flickr.com/4101/5433129276_143f85ce44.jpg" width="221" height="185" /></p>
</td>
<td>
<p align="justify">Little Princess Rapunzel is blessed with long (really looong!) hair, which is golden colored and has healing power. After the end of a long happy story, she marries her lover Flynn. They decide to lead a normal life by getting rid of the mysterious hair, which when cut loses its power and turns brown. There are many colorful beads on her hair in order. Rapunzel has some <b>K</b> favorite colors <b>B</b>[1...K] <br/><br/><br />
To remember good old stories, she wants to keep a part of her hair after its cut. A favorite sub hair is that continuous part of the hair, which has each of her favorite color beads at least once.  </br/></br/></p>
</td>
</tr>
</tbody>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rosyish">rosyish</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-02-2011</td>
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