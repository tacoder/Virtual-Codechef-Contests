<?php require("../../includes/header.php"); ?><h1>PRIME-QUINE</h1><div class="content">
<p>Omrita is all determined to learn programming. This semester she is taking "<strong>Introduction to C programming</strong>". Being a bright student she quickly covered the basics and managed to finish all the assignments way before the dead line. Her Instructor is very impressed by her work and decided to give her some more assignment. A typical assignment on C programming is: </p>
<p> Write a C program that takes an positive integer as input and determines whether it is a prime or not. If it is a prime output "<strong>YES</strong>" else output "<strong>NO</strong>". </p>
<p>Of-course this is very easy for Omrita. So her instructor modified the assignment. Now, if an composite number is encountered in the input, instead of printing "NO" the<br />
program should behave like a <a href="http://en.wikipedia.org/wiki/Quine_(computing)">quine</a> i.e output itself.</p>
<p>Omrita have no clue about writing quine. Hence, she asked for your help.</p>
<p><span><br /></span></p>
<h3><span>Input</span></h3>
<p><span><span>A line contains an integer <strong>N</strong>.</span></span></p>
<ul>
</ul>
<p><span><br /></span></p>
<h3><span>Output</span></h3>
<p><span>The required string described above.</span></p>
<ul>
</ul>
<p><span><br /></span></p>
<h3><span>Constraints</span></h3>
<ul>
<li><span><strong>1</strong> ≤ <strong>N</strong> ≤ <strong>10000</strong></span></li>
</ul>
<p><span><br /></span></p>
<h3><span>Example</span></h3>
<pre><span><strong>Input:</strong>

7</span></pre><pre><span><strong><span>Source</span></strong></span></pre><pre><span>abcde

<strong>Output:</strong>
</span></pre><pre><span>YES</span></pre><pre><span><strong><strong><span>Score:</span></strong></strong></span></pre><pre><span>5</span></pre><pre><strong><span><br /></span></strong></pre><pre><strong><span>Input:</span></strong></pre><pre><span>64</span></pre><pre><strong><span>Source:</span></strong></pre><pre><span>abcde</span></pre><pre><strong><span>Output:</span></strong></pre><pre><span>abcde</span></pre><pre><strong><span>Score:</span></strong></pre><pre><span>5</span></pre><pre><span><br /></span></pre><h3><span>Explanation</span></h3>
<p><span><strong><span>Example</span></strong></span></p>
<p><strong><span>    <strong>case 1: </strong></span><span><strong>7</strong><strong> is a prime number, hence the output "YES" (quotes for clarity).</strong></span></strong></p>
<p><span><strong><span><strong><strong>    </strong><strong>case 2:  </strong><strong>64</strong> is not a prime number, hence the output is the program (source) itself.</strong></span></strong></span></p>
<p><span><strong><br /></strong></span></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Debanjan">Debanjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-09-2013</td>
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
            <td>C, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>