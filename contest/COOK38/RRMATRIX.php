<?php require("../../includes/header.php"); ?><h1>Strange Matrix</h1><div class="content">
<p>Given two matrices <b>A</b> and <b>B</b>. Both have <b>N</b> raws and <b>M</b> columns. In the matrix <b>A</b>, numbers from <b>1</b> to <b>MN</b> have been written in row major order. Row major order numbers cells from left to right, and top to bottom. That is,</p>
<p>Given two matrices <b>A</b> and <b>B</b>. Both have <b>N</b> rows and <b>M</b> columns. In the matrix <b>A</b>, numbers from <b>1</b> to <b>MN</b> have been written in row major order. Row major order numbers cells from left to right, and top to bottom. That is,</p>
<pre>           1                  2                 3             ...     M
A  =    M+1             M+2            M+3        ...     2M
          2M+1           2M+2          2M+3       ...   3M
           .                   .                  .              ...      .
           .                   .                  .               ...      .
         (N-1)M+1    (N-1)M+2    (N-1)M+3   ...   NM
</pre>
<p>Similarly, in the matrix <b>B</b>, numbers from <b>1</b> to <b>MN</b> have been written in column major order. Column major order numbers cells from top to bottom and left to right.</p>
<p>You are to count number of pairs <b>(i,j)</b> such that <b>A<sub>i,j</sub>=B<sub>i,j</sub></b>.</p>
<p> </p>
<h3>Input</h3>
<p> </p>
<p>The input consists of multiple test cases. The first line of input contains a single integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. Each test case is described by one line containing two space separated integers, <b>N</b> and <b>M</b></p>
<p> </p>
<h3>Output</h3>
<p> </p>
<p>Output <b>T</b> lines, i<sup>th</sup> line containing answer of the i<sup>th</sup> test case.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<b> </b>
</ul>
<p> </p>
<li> 1 ≤ T ≤ 10<sup>5</sup> </li>
<li> 1 ≤ N, M ≤ 10<sup>9</sup>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 5
<p>

<b>Output:</b>
2
</p></pre>
<p> </p>
<p> </p>
<h3>Explanation</h3>
<p> </p>
<p>For the first case two matrices look as follows:<br /> <br /><br /> <b>A</b>=<br /><br /> 1 2 3 4 5<br /><br /> 6 7 8 9 10<br /><br /> 11 12 13 14 15<br /><br /> 16 17 18 19 20<br /><br /></p>
<p><b>B</b>=<br /><br /> 1 5 9 13 17<br /><br /> 2 6 10 14 18<br /><br /> 3 7 11 15 19<br /><br /> 4 8 12 16 20</p>
<p><b>A<sub>1,1</sub>=B<sub>1,1</sub></b><br /><br /> <b>A<sub>4,5</sub>=B<sub>4,5</sub></b></p>
</li>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/utkarsh_lath">utkarsh_lath</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-09-2013</td>
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