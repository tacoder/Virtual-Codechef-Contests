<?php require("../../includes/header.php"); ?><h1>A Relation on Numbers</h1><div class="content">

<p> Ned is quite bored in class. As he is very interested in Mathematics, he decides to develop a new number system which he would name after himself. Unlike the other “traditional” number systems, his system does not have “low-level” relationships like successors, predecessors etc. Rather the system is modeled in such a way that it has entities represented by numbers which are related via very complex classes and a mathematical relation <b>R</b>.</p>
<p>The relation <b>R</b> is symmetric i.e. if <b> a R b </b>, then <b> b R a</b> but is not transitive.
</p>
<p>He then asks his arch-rival Ted to solve a problem in this number system. The problem is to find a subset of a given set of <b>N</b> entities which satisfies the following property.</p>
<ul>
<li>For every element <b>a</b> in this subset, the number of distinct elements in the subset which are related to <b>a</b> with the relation <b>R</b> is at-least <b>K</b>.</li>
</ul>
<p>Ted, being a phony, runs to you for help. Help him in finding such a subset.</p>
<h3>Input</h3>
<p> The first line of input contains three space separated integers, <b>N</b>, the number of distinct entities, <b>M</b>, the number of different class relations and <b>K</b>, the size of this subset. Each of the <b>M</b> lines that follow contains two integers <b>a</b> and <b>b</b>, meaning that <b>a</b> and <b>b</b> are related by relation R.</p>
<h3>Output</h3>
<p> For each test case, output a single line containing an integer <b>S</b>, the size of such a maximum subset. If such a subset is not possible, output 0.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>min{n*(n-1)/2, 5*10^5}</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>a,b</b> ≤ <b>N-1</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3 3 2
0 1
0 2
1 2
<b>Output:</b>
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>