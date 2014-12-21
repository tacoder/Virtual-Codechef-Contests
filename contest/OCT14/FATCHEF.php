<?php require("../../includes/header.php"); ?><h1>Remy paints the fence</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/FATCHEF.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/FATCHEF.pdf">Russian</a>.</h3>


<p>
Our chef Remy ate all the delicious food he made. As a result, he has become really fat :). Chef's assistant Linguini has taken up the 
herculean task of bringing back chef Remy to shape.
</p>

<p>
Linguini has built a fence which has <b>N</b> planks in a straight line. The planks are numbered 1 to N from left to right. In front of <b>M</b> of these N planks, he has put a bucket of paint. The paints may be of different colors. Each color is represented by any uppercase letter (A-Z). Chef Remy needs to paint the fence. He uses his painting brush to paint the fence. 
</p>

<p>
Chef Remy starts the task by choosing a plank which has a bucket of paint in front of it and dips his brush in the bucket. He starts walking
randomly along the straight fence passing the planks. He never moves out of the fence. Note that walking randomly along a fence means that Remy keeps walking all the time along his current direction. He can change his direction any time he wishes. Moving along a straight fence has just two directions, forward and backward.
</p>

<p>
Linguini has devised the following recipe for painting the fence.
<ul>
<li> Each bucket has an infinite supply of paint. </li>
<li> The brush can carry paint of a single color at any time. </li>
<li> When Remy passes a paint bucket, the brush acquires the color in the 
   bucket first.  </li>
<li> Every plank that Remy passes in his random walk must be colored with  
   the color in the brush. A plank will be colored completely. </li>
<li> A plank can be colored multiple times. A plank's color is the latest color it 
  is painted with. </li>
</ul>
</p>

<p>
A fence coloring is complete when each plank is painted with some color.
Linguini is watching Remy dance around with colors. He wonders how many different complete fence colorings will he be able to see.  Two fence colorings are different if there is atleast one plank numbered <b>x</b>  whose color differs in both the colorings. Find out the number of 
different complete fence colorings modulo 1000000009. 
</p>


<h3>Input</h3>
<p>
First line contains <b>T</b>, the number of test cases. T test cases follow. The first line of each case contains <b>N</b> and <b>M</b>
separated by a space. Next M lines follow each of the form <b>x</b> and <b>y</b> separated by a space. Here x is the color in the bucket which is placed at plank 
numbered y.
</p>

<h3> Constraints </h3>

<p>
<ul>
<li> 1 &lt;= T &lt;= 10 </li>
<li> 1 &lt;= N &lt;= 100000 </li>
<li> 1 &lt;= M &lt;= N </li>
<li> x will be an uppercase letter between A to Z </li>
<li> 1 &lt;= y &lt;= N </li>
</ul>
</p>


<h3>Output</h3>
<p>
The number of different complete fence colorings modulo 1000000009 for each case on a new line.
</p>


<h3>Example</h3>

<pre>
<b>Input:</b>

3
2 1
R 1
3 1
A 2
6 2
A 2
B 6

<b>Output:</b>
1
1
4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rosyish">rosyish</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-04-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>