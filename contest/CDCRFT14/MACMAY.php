<?php require("../../includes/header.php"); ?><h1>Machine Mayhem</h1><div class="content">
<p>
  It's the year 4224 and Giant Machine Corporation has started working on it’s<br />
  42nd Generation Robots. These robots are designed to have peculiar<br />
  specifications. </p>
<p>  The company has <b>N</b> different parts (numbered from <b>1 to N</b>), each of which impart<br />
  a very specific property to the robot. The formation of a single robot <b>R</b><br />
  consists of <b>M</b> steps. At the <b>i<sup>th</sup></b> step, one of the <b>N</b> parts is chosen and added<br />
  to the current robot. After the <b>M<sup>th</sup></b> step, the robot is ready.<br />
  Let <b>num(i, j)</b> be the count of part number <b>j</b> till the <b>i<sup>th</sup></b> step used for making<br />
  the robot <b>R</b>.</p>
<p>  The 41st Generation Robots were found to be defective in the sense that one of<br />
  their properties overshadowed their other properties significantly. Hence, for<br />
  the 42nd Generation, it was decided that for any robot <b>R</b>, <b>|num(i, j) – num(i,<br />
  k)| &le; 2</b> for every <b>1 &le; i &le; M</b> and for every pair of <b>j, k </b>where <b>1 &le; j,k &le; N</b><br />
  .</p>
<p>Now, the Giant Machine Corporation is interested to know the number of<br />
  different 42nd Generation Robots that they can make which satisfy the above<br />
  criteria and hence they have hired you for the task. Since, this number can be<br />
  very large, output the result modulo <b>10^9 + 7</b>.</p>
<p><b>Note</b> : Two robots <b>R1</b> and <b>R2</b> are considered different, if a different part is<br />
  used in any of the corresponding <b>i</b> steps out of <b>M</b> steps.
  </p>
<h3>Input Format:</h3>
<p>
  The first line starts with an integer <b>T</b>, denoting the number of test cases. <b>T</b><br />
  lines follow with each line consisting of two space separated integers <b>M</b> and<br />
  <b>N</b>.
  </p>
<h3>Output Format:</h3>
<p>
  For each test case, print in a single line the required number.
  </p>
<h3>Constraints:</h3>
<p><b><br />
  1 &le; T &le; 20<br />
  1 &le; N &le; 50<br />
  1 &le; M &le; 10^18<br /></b>
  </p>
<h3>Sample Input:</h3>
<pre>
3
1 1
2 2
3 2</pre><h3>Sample Output:</h3>
<pre>
1
4
6</pre><p><br />
<b>Problem Setter: Vivek Hamirwasia</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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