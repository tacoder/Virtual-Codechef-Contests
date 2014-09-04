<?php require("../../includes/header.php"); ?><h1>AppleTrees</h1><div class="content">

<p class="MsoNormal">
        <b><span><br />
        <span> </span></span><span>Apple<br />
        Trees</span></b></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <span adobe fangsong std>Apple trees in a garden form a rectangular grid. A<br />
        group of monkeys lives on these</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>trees. Not more than one monkey lives in each tree. A<br />
        monkey feels happy to believe that it is</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>the lord of all apple trees it views from the top of<br />
        the tree it lives in. However, as the trees are</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>of different heights a monkey can view trees that are<br />
        not obstructed from its view by other</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>trees. A monkey that views the maximum number T of<br />
        trees is a lord of lords. The undisputed</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>monarch is the lord of lords that lives in the highest<br />
        tree. In case two or more lord of lords</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>have the claim to be the monarch then monarchy is<br />
        disputed.</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>Assume that the ground of the garden is plane;<br />
        vertical straight lines represent trees;</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>trees are at a distance of unity row-wise or<br />
        column-wise; and the height of each tree is an</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>integer in the unit of the distance. A tree of height<br />
        zero in a position indicates absence of a</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>tree on that position. Visibility of a tree R from the<br />
        top of a tree P depends on heights and</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>locations of P, R and other trees. A tree R is<br />
        invisible from the top of a tree P if and only if</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>there exists a visible tree Q that lies on the<br />
        vertical plane containing P and R and is located</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>between P and R so that the top of R is either on or<br />
        below, the line joining tops of P and Q.</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>Write a program to locate the undisputed monarch,<br />
        given heights of all trees.</span></p>
<p class="MsoNormal">
        <b><u><br />
        <span adobe fangsong std><br />
        Input</span></u></b></p>
<p class="MsoNormal">
        <span adobe fangsong std>The input may contain multiple test cases.</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>For each test case, the first line gives two integers<br />
        m and n representing respectively</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>the total number of rows and columns of trees in the<br />
        garden. Each of the next m lines</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>contains n integers representing heights of trees in a<br />
        row. The jth integer in the ith row</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>represents the height of the tree in ith row and jth<br />
        column of the garden. Assume that the</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>garden contains no more than 200 trees.</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>The input terminates with an input 0 as the first<br />
        input for a test case.</span></p>
<p class="MsoNormal">
        <b><u><br />
        <span adobe fangsong std><br />
        <span> </span></span></u></b></p>
<p class="MsoNormal">
        <b><u><br />
        <span adobe fangsong std><br />
        Output</span></u></b></p>
<p class="MsoNormal">
        <span adobe fangsong std>For each test case output three integers r, c and T in<br />
        one line. Integers r and c</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>represent the location of the undisputed monarch,<br />
        where r is the row number and c is the</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>column number of the tree on which the monarch lives.<br />
        In case monarchy is disputed, both r</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>and c are zero. The integer T represents the total<br />
        number of trees visible to a lord of lords.</span></p>
<p class="MsoNormal">
        <b><br />
        <span adobe fangsong std><br />
        Sample Input</span></b></p>
<p class="MsoNormal">
        <span adobe fangsong std>3 3</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>1 2 3</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>4 5 6</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>7 0 9</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>3 4</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>4 4 4 4</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>4 4 4 4</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>4 4 4 4</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>1 10</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>5 3 2 1 6 4 2 8 7 1</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>0</span></p>
<p class="MsoNormal">
        <b><br />
        <span adobe fangsong std><br />
        Sample Output</span></b></p>
<p class="MsoNormal">
        <span adobe fangsong std>2 2 7</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>0 0 10</span></p>
<p class="MsoNormal">
        <span adobe fangsong std>1 5 6</span></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-03-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>