<?php require("../../includes/header.php"); ?><h1>Art in Digital Age</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/SMPAINT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/SMPAINT.pdf">Russian</a>.</h3>

<p>Being a CS student, Ron really don't understand why he has to take a compulsory course called "Art in Digital Age".<br />
The objective of this course from what his school said is to help the CS students release the stress by doing something new other from coding/programming. The problem is Ron really love coding and he doesn't care about other stuff. This course even gives him<br />
more stress. However, like it or not Ron still need to try his best not to let this course ruins his great GPA.<br />
Can you help him with his first assignment which is described below.
</p>
<p>
In this assignment, Ron is given an <b>N</b>×<b>N</b> pixels image called sample image. Ron is required to create a copy of the<br />
sample image using an simple graphic painting program called SMPaint. Only two types of operation can be used in SMPaint:</p>
<ul>
<li>Init: Make the new image with the specific size, all the pixels of the new image are white.</li>
<li>Paint: User gives 5 integers <b>C</b>, <b>U</b>, <b>D</b>, <b>L</b>, <b>R</b> and SMPaint will change colour to <b>C</b> at all the pixels (<b>x</b>, <b>y</b>) such that (<b>U</b> ≤ <b>x</b> ≤ <b>D</b> and <b>L</b> ≤ <b>y</b> ≤ <b>R</b>).<br />
The pixel (<b>x</b>, <b>y</b>) is the pixel at the <b>xth</b> row (from the top, 1-indexed) and the <b>yth</b> column (from the left side, 1-indexed).</li>
</ul>

<p><a href="http://tinypic.com?ref=33wa5wo" target="_blank"><img src="http://i40.tinypic.com/33wa5wo.png" border="0" alt="Image and video hosting by TinyPic" /></a></p>
<p>
We can see that the Paint operation actually is painting a specific rectangle in the image by one specific colour.<br />
The image in the <b>figure 1</b> can be drawn using 3 calls of the second function if we paint the red rectangle first and then paint two<br />
green rectangles. Notice that if a pixel is changed colour several time, it final colour is corresponding to the last time it is painted.<br />
This help us save some calls of the second function. For the image in figure 1 we can paint a large green rectangle first and then paint the red rectangle.<br />
Your mission is help Ron finish the assignment with using as least as possible number of calls of the second function.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains integer <b>N</b>. Each of the next <b>N</b> lines contains <b>N</b> integers. The <b>yth</b> number in the <b>xth</b> line<br />
represent the colour of the pixel (<b>x</b>, <b>y</b>) in the sample image.
</p>
<h3>Output</h3>
<p>The first line of the output must contain integer <b>M</b> that is the number of calls of the second function you need.<br />
The next <b>M</b> lines represent the calls to the second function in chronological order.<br />
Each line must contain 5 integers which are the values (they must be in this order) <b>C</b>, <b>U</b>, <b>D</b>, <b>L</b>, <b>R</b> for the corresponding call. The following conditions must be held:<br />
</p>
<li><b>0</b> ≤ <b>C</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>U</b> ≤ <b>D</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
<p>
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li>The colours are represented by integers from <b>0</b> to <b>100</b> where <b>0</b> means white colour.</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
0 0 0 0 0
0 1 2 1 0
0 1 2 1 0
0 1 2 1 0
0 0 0 0 0

<b>Output:</b>
2
1 2 4 2 4
2 2 4 3 3
</pre><p> </p>
<h3> Scoring &amp; the test data generation </h3>
<p>
Your solution will not get point if it performs more than <b>N<sup>2</sup></b> Paint operations or the final image is different<br />
with the sample one. Your solution will be marked as Wrong Answer for that two cases.<br /></p>
<p>If the number of Paint operations does not exceed <b>N<sup>2</sup></b> and the final image is the same as the sample one<br />
you will get the score which is equal to the number of Paint operations. Smaller score means your solution is better. <br /> <br /></p>
<p>The test data is generated randomly by simulating the process of making an image in SMPaint using no more than <b>500</b> Paint operations. But please note that, the value of <b>N</b> is picked manually. <br /> <br /></p>
<p>We have 25 official test files. You must correctly solve all test files to receive OK.<br />
During the contest, your overall score is the sum of the scores on the first 7 test files.<br />
After the contest, all solutions will be rescored by the sum of the scores on the rest 18 test files.<br />
Note, that public part of the tests can not contain some border cases. For example, we should say that<br />
in all public tests <b>10 ≤ N</b> holds.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-09-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>