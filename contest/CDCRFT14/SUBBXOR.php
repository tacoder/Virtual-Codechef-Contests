<?php require("../../includes/header.php"); ?><h1>Subarray Xor</h1><div class="content">
<p>
  A straightforward question. Given an array of positive integers you have to<br />
  print the number of subarrays whose XOR is less than <b>K</b>.<br />
  Subarrays are defined as a sequence of continuous elements <b>A<sub>i</sub>, A<sub>i+1</sub>, ..., A<sub>j</sub> </b>.<br />
  XOR of a subarray is defined as <b>A<sub>i</sub>^A<sub>i+1</sub>^ ... ^A<sub>j</sub></b>.<br />
  Symbol<b> ^</b> is Exclusive Or. You can read more about it here:<br />
  <a href='http://en.wikipedia.org/wiki/Exclusive_or'> <a href="http://en.wikipedia.org/wiki/Exclusive_or" title="http://en.wikipedia.org/wiki/Exclusive_or">http://en.wikipedia.org/wiki/Exclusive_or</a> </a>
  </p>
<h3>Input Format:</h3>
<p>
  First line contains<b> T</b>, the number of test cases. Each of the test case<br />
  consists of<b> N</b> and <b>K</b> in one line, followed by<b> N</b> space separated integers in<br />
  next line.
  </p>
<h3>Output Format:</h3>
<p>
  For each test case, print the required answer.
  </p>
<h3>Constraints:</h3>
<p><b><br />
  1 ≤  T ≤  10<br />
  1 ≤  N ≤  10^5<br />
  1 ≤  A[i] ≤  10^5<br />
  1 ≤  K ≤  10^6<br />
  Sum of N over all testcases will not exceed 10^5.</b>
  </p>
<h3>Sample Input:</h3>
<pre>
1
5 2
4 1 3 2 7	</pre><h3>Sample Output:</h3>
<pre>
3</pre><h3>Explanation:</h3>
<p>
  Only subarrays satisfying the conditions are [1],[1,3,2] and [3,2].
  </p>
<p><br />
<b>Problem Setter: Lalit Kundu</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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