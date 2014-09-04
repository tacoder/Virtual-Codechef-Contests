<?php require("../../includes/header.php"); ?><h1>Permutation Cycles</h1><div class="content">

<p> We consider <em>permutations</em> of the numbers 1,..., <em>N</em><br />
for some <em>N</em>.  By permutation we mean a rearrangment of the<br />
number 1,...,<em>N</em>.  For example</p>
<pre>
2  4  5  1  7  6  3  8
</pre><p> is a permutation of 1,2,...,8.  Of course,</p>
<pre>
1  2  3  4  5  6  7  8
</pre><p> is also a permutation of 1,2,...,8.</p>
<p> We can "walk around" a permutation in a interesting way and here<br />
is how it is done for the permutation above:</p>
<p> Start at position 1. At position 1 we have 2 and so we go to<br />
position 2.  Here we find 4 and so we go to position 4.  Here we find<br />
1, which is a position that we have already visited. This completes<br />
the first part of our walk and we denote this walk by (1 2 4 1). Such<br />
a walk is called a <em>cycle</em>.  An interesting property of such<br />
walks, that you may take for granted, is that the position we revisit<br />
will always be the one we started from! </p>
<p> We continue our walk by jumping to first unvisited position, in<br />
this case position 3 and continue in the same manner. This time we<br />
find 5 at position 3 and so we go to position 5 and find 7 and we go<br />
to position 7 and find 3 and thus we get the cycle (3 5 7 3).  Next we<br />
start at position 6 and get (6 6) and finally we start at position 8<br />
and get the cycle (8 8). We have exhausted all the positions.  Our<br />
walk through this permutation consists of 4 cycles.</p>
<p> One can carry out this walk through any permutation and obtain a<br />
set of cycles as the result.  Your task is to print out the cycles<br />
that result from walking through a given permutation.</p>
<p>Input format</p>
<p> The first line of the input is a positive integer <em>N</em><br />
indicating the length of the permutation. The next line contains<br />
<em>N</em> integers and is a permutation of 1,2,...,<em>N</em>.</p>
<p> You may assume that <em>N</em> ≤ 1000.</p>
<p>Output format</p>
<p> The first line of the output must contain a single integer<br />
<em>k</em> denoting the number of cycles in the permutation.  Line 2<br />
should describe the first cycle, line 3 the second cycle and so on and<br />
line <em>k</em>+1 should describe the kth cycle.</p>
<p>Examples</p>
<p>Sample input 1:</p>
<pre>
8
2 4 5 1 7 6 3 8
</pre><p>Sample output 1:</p>
<pre>
4
1 2 4 1
3 5 7 3
6 6
8 8 
</pre><p>Sample input 2:</p>
<pre>
8
1 2 3 4 5 6 7 8
</pre><p>Sample output 2:</p>
<pre>
8
1 1
2 2
3 3
4 4
5 5
6 6
7 7
8 8
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-07-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, GO, HASK, ICK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>