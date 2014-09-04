<?php require("../../includes/header.php"); ?><h1>Fun with AGp</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/FUNAGP.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/FUNAGP.pdf">Russian</a>.</h3>
<p>You are given an 1-based array <b>A</b> and its fixed parameters: <b>R</b>, <b>p<sub>1</sub></b>, <b>p<sub>2</sub></b>. You need to mantain this array, performing some operations. The operations are as follows:</p>
<p><li>
0 <b>S D X Y</b><br /><br />
Add an <a href="https://en.wikipedia.org/wiki/Arithmetico-geometric_sequence">AGP</a> with the start term of <b>S</b>, the common difference of <b>D</b>, common ratio of <b>R</b> from the <b>X</b>-th to the to <b>Y</b>-th element of <b>A</b>.<br /><br />
In other words: add <b>S</b> , <b>(S+D)*R</b> , <b>(S+2D)*R<sup>2</sup></b> ,....., <b>(S+(Y-X)*D)*R<sup>Y-X</sup></b> respectively to <b>A[X]</b>, <b>A[X+1]</b>, ..., <b>A[Y]</b>.<br /><br />
</li>
<li>
1 <b>X g</b><br /><br />
Replace the value of <b>A[X]</b> to <b>(A[X])<sup>g</sup></b> modulo <b>p<sub>2</sub></b>.<br /><br />
In other words: <b>A[x]</b> = <b>(A[X])<sup>g</sup></b> modulo <b>p<sub>2</sub></b>.<br /><br />
</li>
<li>
2 <b>X Y</b><br /><br />
Report the sum of elements in <b>A</b> from the <b>X</b>-th to the <b>Y</b>-th modulo <b>p<sub>1</sub></b>.<br /><br />
In other words: output  (<b>A[X]</b> + ...... + <b>A[Y]</b>) modulo <b>p<sub>1</sub></b>.<br /><br />
</li>
<h3>Input</h3>
</p><p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
The first line of each test case contains <b>5</b> single space separated integers: <b>N</b>, <b>Q</b>, <b>R</b>, <b>p<sub>1</sub></b>, <b>p<sub>2</sub></b>).<br /><br />
The next line contains <b>N</b> single space separated integers (each is between <b>0</b> and <b>100000</b> inclusive).<br /><br />
Then, there are <b>Q</b> lines denoting the queries in the format, described above.<br /></p>
<h3>Output</h3>
<p>For each query of the type 2 output the sum of all elements of <b>A</b> from the <b>X</b>-th to the <b>Y</b>-th modulo <b>p<sub>1</sub></b>.<br /></p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ Sum of <b>N</b> over all testcases ≤ 10<sup>5</sup> </li>
<li>1 ≤ Sum of <b>Q</b> over all testcases ≤ 10<sup>5</sup> </li>
<li>1 ≤ <b>N</b>, <b>Q</b>, <b>S</b>, <b>D</b> ≤ 10<sup>5</sup></li>
<li> <b>p<sub>1</sub></b>, <b>p<sub>2</sub></b> are primes </li>
<li> 2 ≤ <b>p<sub>1</sub></b>, <b>p<sub>2</sub></b> ≤ 10<sup>8</sup></li>
<li> 1 ≤ <b>R</b> ≤ 10<sup>9</sup></li>
<li> 1 ≤ <b>g</b> ≤ 10<sup>3</sup></li>
</ul>
<p><br /></p>
<h3>Example</h3>
<p><b>Input</b><br /><br />
2<br /><br />
5 3 2 7 11<br /><br />
0 0 0 0 0<br /><br />
0 2 3 1 3<br /><br />
1 2 2<br /><br />
2 1 5<br /><br />
5 3 3 11 7<br /><br />
1 2 3 4 5<br /><br />
0 2 3 1 3<br /><br />
1 2 2<br /><br />
2 1 5<br /><br />
<br /><br />
<b>Output</b><br /><br />
0<br /><br />
1<br /><br />
<br /><br />
<b>Explanation</b><br /><br /></p>
<li>
<strong>The first test case</strong><br /><br /><br />
Initially <b>A</b> = [0,0,0,0,0] <br /><br />
After the first query : <b>A</b> = [2,10,32,0,0]<br /><br />
After the second query : <b>A</b> = [2,1,32,0,0] as (10 * 10) modulo 11 = 1<br /><br />
So in the third query :  2 + 1 + 32 + 0 + 0 = 35 , so 35 modulo 7 = 0<br /><br />
<br />
</li>
<li>
<strong>The second test case</strong><br /><br /><br />
Initially <b>A</b> = [1,2,3,4,5] <br /><br />
After the first query : <b>A</b> = [3,17,75,4,5]<br /><br />
After the second query : <b>A</b> = [3,2,75,4,5] as (17*17) modulo 7 = 2<br /><br />
So in the third query :  3 + 2 + 75 + 4 + 5 = 89 , so 89 modulo 11 = 1<br />
</li>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/devuy11">devuy11</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-03-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>