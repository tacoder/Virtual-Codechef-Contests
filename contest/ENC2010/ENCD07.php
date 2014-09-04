<?php require("../../includes/header.php"); ?><h1>Modified Travelling Salesperson Problem</h1><div class="content">

<p>The problem involves determining a route for a SalesPerson so that he visits all the places while walking minimal distance, so as to rest weary legs. Given a sequence of streets (connecting given intersections) you are to write a program that determines the minimal cost tour that traverses every street at least once. The tour must begin and end at the same intersection. The cost of traversing a street is a function of the length of the street. In this problem the number of streets that meet at a given intersection is called the degree of the intersection. There will be at most two intersections with odd degree. All other intersections will have even degree, i.e., an even number of streets meeting at that intersection.</p>
<h3>Input</h3>
<p>The input consists of a sequence of one or more routes. A route is composed of a sequence of street names (strings), one per line, and is terminated by the string "end" which is NOT part of the route. The first and last letters of each street name specify the two intersections for that street, the length of the street name indicates the cost of traversing the street. All street names will consist of lowercase alphabetic characters. For example, the name abc indicates a street with intersections a and c of length 3, and the name computer indicates a street with intersections c and r of length 8. No street name will have the same first and last letter and there will be at most one street directly connecting any two intersections. As specified, the number of intersections with odd degree in a route will be at most two. In each route there will be a path between all intersections, i.e., the intersections are connected.</p>
<h3>Output</h3>
<p>For each route the output should consist of the cost of the minimal tour that visits all streets at least once. The minimal tour costs should be output in the order corresponding to the input routes. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
one
two
three
end
mat
dzrtmouth
limkoping
takmania
yolk
emary
comnell
duce
kamnas
hifdesheim
comcord
arcansas
wildiams
glafgow
end

<b>Output:</b>
11
114
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rscrbv">rscrbv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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