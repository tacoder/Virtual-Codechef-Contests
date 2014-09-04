<?php require("../../includes/header.php"); ?><h1>Chef and Magic Numbers</h1><div class="content">
<p>
  Chef is the cleverest man in the whole world. However he is not interested in science, give him the magic. His first magic lesson consists of  converting a number <b>k</b> to <b>F(k)</b> where <b>F(k)</b> - is the <b>k-th</b> magic integer. An integer is magic if <b>S(n)</b> is smaller than or equal to <b>q</b>. <b>S(n)</b> is the sum of squares of the digits in n. For example, <b>S(13) = 1^2 + 3^2 = 10</b>.
</p><p>
   Now Chef want to test his magical abilities. He knows how to solve this task, but who will check it? That is where you come in.
</p>
<p>
  The problem is as follows: there is an array of <b>N</b> numbers. Let <b>A</b> be the given array. Then <b>Bi</b> = <b>F(Ai)</b> for all <b>i</b> <b>(1 &lt;= i &lt;= N)</b>. This is followed by <b>M</b> queries of the form <b>(l, r)</b>. For each such query you need to find the sum of the elements of the array <b>B</b> that are in the interval <b>(l, r)</b> modulo 1000000007.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>q</b>. The next line contains an integer <b>N</b>. The third line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given array. Next line contains <b>M</b> denoting the number of queries. The next <b>M</b> lines contains two integers denoting left and right ends of queries.  </p>
<p> </p>
<h3>Output</h3>
<p>   For each query, output a single line containing   sum of the elements of the array <b>B</b> in the given interval.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>q</b> ≤ <b>10^9</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>3*10^5</b></li>
<li><b>1</b> ≤ <b>Ai</b> ≤ <b>3*10^5</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>l</b> ≤ <b>r</b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
201
5
1 2 10 5 10000
5
1 1
2 2
3 3
5 5
1 5  
<b>Output:</b>
1
2
10
10636
10654 
</pre><p> </p>
<h3>Scoring</h3>
<p>Subtask 1 (30 points): <b>200 ≤ q ≤ 10<sup>9</sup></b>. <br /><br />
Subtask 2 (70 points):  Look at constraints<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/balajiganapath">balajiganapath</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-08-2013</td>
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