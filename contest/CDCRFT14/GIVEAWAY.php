<?php require("../../includes/header.php"); ?><h1>Give Away</h1><div class="content">
<p>
  You are given a <b>1-indexed</b> array <b>X</b>, consisting of<b> N</b> integers, and a set of <b>Q</b><br />
  queries. <br />
  There are two kinds of queries:<br />
  1. <b>0 a b c</b><br />
  Here you are required to return the number of elements with indices in <b>[a,b]</b><br />
  greater than or equal to <b>c</b><br />
  2. <b>1 a b</b><br />
  Here you are required to change the <b>a<sup>th</sup></b> element of array to <b>b</b>.
  </p>
<h3>Input Format:</h3>
<p>
  First line contains <b>N</b>, the number of elements in the array <b>X</b>. The next line<br />
  contains <b>N</b> space separated integers representing the elements of <b>X</b>. The third<br />
  line of input contains a single integer, <b>Q</b>, the number of queries. The next <b>Q</b><br />
  lines of input each contain queries of two kinds as described above.
  </p>
<h3>Output Format:</h3>
<p>
  <b>Q </b>lines with the ith line contains the answer for the <b>i<sup>th</sup></b> query
  </p>
<h3>Constraints:</h3>
<p><b><br />
  1 ≤ N ≤ 5*10^5<br />
  1 ≤ Q ≤ 10^5<br />
  1 ≤ X[i] ≤ 10^9<br />
  1 ≤ a ≤ b &le; N for query type 0<br />
  1 ≤ a ≤ 10^5, 1 &lt; b ≤ 10^9 for query type 1<br />
  1 ≤ c ≤ 10^9<br /></b>
  </p>
<h3>Sample Input:</h3>
<pre>
5
1 2 3 4 5
3
0 1 5 10
1 2 20
0 1 3 10</pre><h3>Sample Output:</h3>
<pre>
0
1</pre><p><br />
<b>Problem Setter: Pulkit Goel and Vidit Gupta</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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