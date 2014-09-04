<?php require("../../includes/header.php"); ?><h1>Payload for spacecraft</h1><div class="content">

<p>It is known that space exploration is very expensive. Human has never steeped foot to another planet other than moon. But with the help of &ldquo;Autobots&rdquo; they are designing an aircraft which would take them to the planet-&ldquo; Cybertron&rdquo;- the planet of Autobots. But they are facing problem in payload which can be placed on aircraft. They can take only limited resources because they each resource posses some weight which adds up to the weight of permissible payload. However the resources are to be taken on the basis of cost and the permissible weight. So, they need to make a choice by selecting the product by its cost. They must also carry as much load as permitted by payload.<br />
Given a set S of n resources such that each item i has a positive cost ci and a positive weight wi and we have to find the maximum benefit subset that does not exceed the given weight W.  It is allowed to break resources into fractions arbitrary. The whole process is done so as to maximize the cost level of the total payload.<br />
Total cost of the selected payload should be calculated.</p>
<h3>Input</h3>
<p>First line contains the total number of resources. Second line of input contains the maximum permissible load (payload) of the spacecraft. Next line contains the weight of 1st item followed by the cost of that resource. Similarly, the next consecutive lines will contain the weight and cost depending upon the number of resources entered.</p>
<h3>Output</h3>
<p>It should contain the total cost of the selected items. This is calculated by adding the products of the selected weights and the unit costs respectively of the resource. The output should be set to 6 digit of precision float type. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5
1 2
2 3
4 1

<b>Output:</b>
5.500000
<b>Input:</b>
4
8
3 8
4 7
2 4
2 3
<b>Output:</b>
17.250000
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bestankur007">bestankur007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-03-2012</td>
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