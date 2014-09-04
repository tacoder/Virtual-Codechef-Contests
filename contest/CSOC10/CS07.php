<?php require("../../includes/header.php"); ?><h1>Dancing Square</h1><div class="content">

<p>Problem text...<br />
A dancing square is a “transparent” n x n matrix whose components are "painted"<br />
with a uppercase x (x) or a period (.). A dancing square dances by spinning 90<br />
clockwise or counterclockwise, and or flipping about a centered horizontal or vertical<br />
axis<br />
When dancing squares are dancing it can be quite challenging to determine which<br />
are identically painted and which are distinct. Write a program which inputs an<br />
original dancing square, then inputs one or more additional dancing squares and<br />
determines for each one if it is identical- i.e. can be obtained from original by some<br />
sequence of spin and/or flips, or is distinct- i.e. cannot be obtained from the original<br />
by sequence of spins and/or flips.</p>
<h3>Input</h3>

<p>Input description...<br />
The first line of standard input contains the dimension n&gt;=1 of all dancing squares<br />
which follow. The subsequent lines of input contain at least two dancing squares,<br />
each preceded by blank line and consisting of n lines containing n component<br />
characters.</p>
<h3>Output</h3>

<p>Output description...<br />
For each dancing square in the standard input following the first one, output a line<br />
containing "identical" or "distinct", indicating whether it is identical to or distinct from<br />
the first one.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
x.x
x..
xx.
xxx
..x
x..
xxx
.. x
x. x

<b>Output:</b>
Square 2 is identical to square 1.
Square 3 is distinct from square 1.
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>