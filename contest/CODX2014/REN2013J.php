<?php require("../../includes/header.php"); ?><h1>Spec Ops</h1><div class="content">
<p>
You are given an array of length N.You are to perform certain operations on this array, these operations are of two types:</p>
<p><ul>
<li>
Update a range <b>[x...y]</b>: In which you must divide each number in the given range <b>[x...y]</b> by 2.This division is integer division i.e 7/2 = 3</li>
</ul></p>
<p><li>
Query a range <b>[x...y]</b>: In which you must output the sum of all the numbers presently in range <b>[x...y]</b>.</li>
</p>
<p>
<b>Note:</b>The range <b>[x...y]</b> mentioned above is inclusive of both index x and y.
</p>
<h3>Input</h3>
<p>The input starts with a single line containing N (1&lt;=N&lt;=10<sup>5</sup>) the number of elements in the array. The next line contains N space separated integers which are the elements of the array.The elements of the array will be between 0 and 1000.</p>
<p>
The next line will contain Q (1&lt;=Q&lt;=10<sup>5</sup>) the number of operations to be applied.Each of the next Q lines contains the specification of a query.Each of these lines contains 3 integers, the first being 1 or 2 denoting that the operation is an update or query respectively. The next two integers X and Y which represent the range on which to update or query [X...Y]. It is guaranteed that X&lt;=Y and that X,Y&lt;=N.</p>
<h3>Output</h3>
<p>The output should consist of exactly that many lines as the number of Operations of type 2.Where each line consists of the answer of the corresponding query.</p>
<h3>Example</h3>
<pre><b>Input:</b>

5
1 1 1 1 5
5
2 1 5
1 1 2
2 1 5
1 5 5
2 1 5

<b>Output:</b>
9
7
4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitrc17">amitrc17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-01-2014</td>
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