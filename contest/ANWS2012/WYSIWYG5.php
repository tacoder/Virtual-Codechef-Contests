<?php require("../../includes/header.php"); ?><h1>Choosing The Box</h1><div class="content">

<p>John&rsquo;s machine manufacturing company gets failed ( even your program could not save him !! ) so he starts a new box business. He has many boxes left from his previous business. He has exactly M boxes each of which could be denoted by its 3 dimensions &ndash; (X,Y,Z). He has been given an order according to which he needs to deliver N <b><u>identical</u></b> boxes to keep N objects of some given dimension. Dimension of the object will be again of the form &ndash; (X,Y,Z).  You may assume that an object of size (X, Y, Z) would ﬁt perfectly into a box of size (X,Y,Z). If there are not at least N boxes that ﬁt perfectly, then John wants N boxes that ﬁt the items as tightly as possible. The box size that ﬁts the items as tightly as possible is the one which minimizes the empty space when the item is put inside the box. An item can be rotated in any direction to be accommodated inside a box; therefore, a box of size(X, Y, Z) is as good as a box of size (Y, Z, X), for example. </p>
<h3>Input</h3>

<p>The first line would give the number of test cases.<br />
<br />The ﬁrst line of a test case contains two integers N and M, indicating respectively the number of boxes the client orders (1 &le; N &le; 1500) and the number of boxes John has (1 &le; M &le; 1500). The second line contains three integers X, Y and Z, representing the dimensions of the item the client wants to wrap (0 &lt; X, Y, Z &le; 50). Each of the next M lines contains three integers A, B and C representing the dimensions of a box in the stock list (0 &lt; A, B, C &le; 50).<br />
<br />Repeat for next test case.</p>
<h3>Output</h3>

<p>For each test case in the input your program must produce one line, containing either :</p>
<ul>
<li>The single word &lsquo;impossible&rsquo;, in case it is not possible to fulﬁll the client&rsquo;s order (because there are not at least N boxes of the same size in stock that can contain the item).
</li>
<li>one integer V , which speciﬁes the volume of empty space left when one of the N items packed in one of the boxes chosen.
</li>
</ul>
<p></p>
<h3>Example</h3>
<pre>
<b>Input:
3
1 1
2 4 3
2 3 4
2 6
3 1 3
7 4 7
10 8 2
2 8 10
6 2 9
7 7 4
6 2 9
1 1
3 3 3
1 1 1
</b>

<b>Output:
0
99
impossible
</b>
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ankit_tripathi">ankit_tripathi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2012</td>
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