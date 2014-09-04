<?php require("../../includes/header.php"); ?><h1>Kind Uncle Ben</h1><div class="content">

<p>
Uncle Ben is a very kind man and is revered by the whole neighborhood. One halloween night a group of trick-or-treaters come by Ben's house. Uncle Ben has some treats with him but he sees that the children do not have equal number of treats. He feels that it would be unfair to give away the treats to just any of the kids. So he decides to line up all the kids and distribute the treats according to the number of treats that the respective child has, so that he may equalize the number of treats to the best extent. What is the maximum number of children that have equal number of treats. It is not necessary that Uncle Ben give all his treats.</p>
<h3>Input</h3>
<p>
First line has two integers N (1 &le; N &le; 100000), number of children and K  (1 &le; N &le; 10<sup>7</sup>), number of treats Uncle Ben has. The second line contains N integers sepearated by single space, c<sub>1</sub>, c<sub>2</sub>, .... ,c<sub>n</sub> (1 &le; c<sub>i</sub> &le; 10<sup>6</sup>)  where c<sub>i</sub> is the number of treats i<sup>th</sup> children has.</p>
<h3>Output</h3>
<p>
Output  maximum number of children that have equal number of treats.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4 5
5 5 3 1

<b>Output:</b>
3

<b>Explanation:</b>
Uncle Ben gives two treats to 3rd child. So 3 children have five treats each. <br />
There is no way that more than 3 children can have equal treats.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitpandeykgp">amitpandeykgp</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>