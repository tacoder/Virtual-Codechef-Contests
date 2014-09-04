<?php require("../../includes/header.php"); ?><h1>Sorting</h1><div class="content">
<p>Alice uses the following pseudocode when she needs to sort a permutation of <b>N</b> positive integers:<br /><br />
<br /></p>
<p>procedure Sort(list <b>A</b>) defined as: <br /><br />
   list <b>less</b>, <b>greater</b><br /><br />
   if length(<b>A</b>) &lt;= 1 then return <b>A</b><br /><br />
   <b>pivot</b> := <b>A<sub>(length(A)+1) / 2</sub></b><br /><br />
   for <b>i</b> := 1 to length(<b>A</b>) do:<br /><br />
      Increment(<b>comparison_count</b>)<br /><br />
      if <b>A<sub>i</sub></b> &lt; <b>pivot</b> then append <b>A<sub>i</sub></b> to <b>less</b> else if <b>A<sub>i</sub></b> &gt; <b>pivot</b> append <b>A<sub>i</sub></b> to <b>greater</b><br /><br />
      end if<br /><br />
   end for<br /><br />
   return concatenate(Sort(<b>less</b>), <b>pivot</b>, Sort(<b>greater</b>) )<br /><br />
<br /><br />
And now we are interested in the number of comparisons that will be made during the sorting of the given permutation of integers <b>A</b> with the provided code. So, we ask you to find the value of the variable <b>comparison_count</b> after such a sorting.
</p>
<h3>Input</h3>
<p>The first line of input consists of a single integer <b>N</b>. The second line of input contains a permutation of <b>N</b> numbers. </p>
<h3>Output</h3>
<p>Output the number of comparisons on the first and only line of the output.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
4 3 5 1 2

<b>Output:</b>
11
</pre><h3>Scoring</h3>
<p>Subtask 1 (32 points): 1 &lt;= <b>N</b> &lt;= 2000. <br /><br />
Subtask 2 (9 points): 1 &lt;= <b>N</b> &lt;= 10<sup>5</sup>, the permutation is generated randomly.<br /><br />
Subtask 3 (45 points): 1 &lt;= <b>N</b> &lt;= 65536. <br /><br />
Subtask 4 (14 points): 1 &lt;= <b>N</b> &lt;= 5*10<sup>5</sup>.<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-07-2013</td>
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