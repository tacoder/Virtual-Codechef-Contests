<?php require("../../includes/header.php"); ?><h1>Discrepancies in the Voters List</h1><div class="content">

<p> As you might remember, the collector of Siruseri had ordered<br />
a complete revision of the Voters List. He knew that constructing<br />
the list of voters is a difficult task, prone to errors. Some<br />
voters may have been away on vacation, others may have moved<br />
during the enrollment and so on. </p>
<p> To be as accurate as possible, he entrusted the task to three different<br />
officials. Each of them was to independently record the list of voters and<br />
send it to the collector. In Siruseri, every one has a ID number and<br />
the list would only list the ID numbers of the voters and not their names.<br />
The officials were expected to arrange the ID numbers in ascending order<br />
in their lists. </p>
<p> On receiving the lists, the Collector realised that there were<br />
discrepancies - the three lists were not identical.  He decided<br />
to go with the majority. That is, he decided to construct the<br />
final list including only those ID numbers that appeared in at<br />
least 2 out of the 3 lists.  For example if the three lists<br />
were</p>
<pre>
23  30  42  57  90
21  23  35  57  90  92
21  23  30  57  90 
</pre><p>then the final list compiled by the collector would be:</p>
<pre>
21  23  30  57  90
</pre><p> The ID numbers 35, 42 and 92 which appeared in only one list<br />
each do not figure in the final list.</p>
<p> Your task is to help the collector by writing a program that<br />
produces the final list from the three given lists.</p>
<p>Input format</p>
<p>The first line of the input contains 3 integers<br />
<em>N</em><sub>1</sub>, <em>N</em><sub>2</sub> and<br />
<em>N</em><sub>3</sub>.  <em>N</em><sub>1</sub> is the number of<br />
voters in the first list, <em>N</em><sub>2</sub> is the number of<br />
voters in the second list and <em>N</em><sub>3</sub> is the number of<br />
voters in the third list.  The next <em>N</em><sub>1</sub> lines<br />
(lines 2,...,<em>N</em><sub>1</sub>+1) contain one positive integer<br />
each and describe the first list in ascending order.  The following</p>
<p><em>N</em><sub>2</sub> lines (lines<br />
<em>N</em><sub>1</sub>+2,...,<em>N</em><sub>1</sub>+<em>N</em><sub>2</sub>+1)<br />
describe the second list in ascending order and the final<br />
<em>N</em><sub>3</sub> lines (lines</p>
<p><em>N</em><sub>1</sub>+<em>N</em><sub>2</sub>+2,...,<em>N</em><sub>1</sub>+<em>N</em><sub>2</sub>+<em>N</em><sub>3</sub>+1)<br />
describe the third list in ascending order.</p>
<p>Output format</p>
<p>The first line of the output should contain a single integer<br />
<em>M</em> indicating the number voters in the final list. The next<br />
<em>M</em> lines (lines 2,...,<em>M</em>+1) should contain one<br />
positive integer each, describing the list of voters in the final<br />
list, in ascending order.</p>
<p>Test data</p>
<p>You may assume that 1 ≤<br />
<em>N</em><sub>1</sub>,<em>N</em><sub>2</sub>,<em>N</em><sub>3</sub><br />
≤ 50000.
</p>
<p>Example</p>
<p>Sample input:</p>
<pre>
5 6 5
23
30
42
57
90
21 
23 
35 
57 
90 
92 
21 
23 
30 
57 
90 
</pre><p>Sample output:</p>
<pre>
5
21 
23 
30 
57 
90
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-07-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>