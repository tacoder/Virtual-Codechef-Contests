<?php require("../../includes/header.php"); ?><h1>PIPES</h1><div class="content">
<p> </p>
<p>Bob has been given a Summer Vacation project by his Math's Teacher. After spending almost the whole vacation sleeping,eating,playing and doing everything (except coding), Bob is now anxious about completing the project and that too before the school reopens.<br />
<b>N</b> number of Pipes of length <b>L1 , L2 ,L3 , …... LN </b>are kept in a store. Using these pipes,which can only be joined end to end (such that they can move freely in a 2-D plane only about the pivot/point of intersection) , construct any polygon having the maximum number of edges (pipes representing the edges).<br />
Now, Bob needs your help!
</p>
<p> </p>
<h3>Input</h3>
<p>First line of input contains an integer T denoting the number of test cases. For each test case, the first line contains an integer N denoting the number of Pipes. The next line contains <b>N</b> space separated integers L1 , L2 ,L3 , ……, LN where Li represents the <b>length </b>of ith pipe.
</p>
<h3>Output</h3>
<p>For each test, print a single line containing the maximum number of pipes which can be used to construct the polygon.<br />
In Case, if it's impossible to construct a polygon using the pipes present in the store, then print <b>“-1”</b> (quotes of clarity).
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li>1&lt;=N &lt;=10000</li>
<li>1&lt;= Li &lt;= 10^6</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
4
2 2 3 3
3
1 2 3

<b>Output:</b>
4
-1
</pre><p> </p>
<h3>Explanation</h3>
<p><b> Example Case 1:</b><br />
one of the possible polygon is a 3 sided polygon(triangle) with edges 2,2,3. Another possible polygon is a 4 sided polygon(rectangle) with edges 2,2,3,3. Since 4 &gt; 3 , hence, we get a polygon with maximum of 4 edges.</p>
<p><b>Example Case 2:</b><br />
Not possible to get a polygon with edges 1,2,3. Hence the Output is -1.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/s24w">s24w</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-03-2014</td>
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