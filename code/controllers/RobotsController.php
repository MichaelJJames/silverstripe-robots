<?php
class RobotsController extends Controller {
	
		public function index() {

			$config = SiteConfig::current_site_config();

			if($config->AllowCrawl == 1) {

				$contents = $config->RobotsContent;

			}else{

				$contents = "User-agent: * \n";
				$contents .= "Disallow: / \n";

			}
			
			$file = new SS_HTTPResponse(trim($contents), 200);
			$file->addHeader("Content-Type", "text/plain; charset=\"utf-8\"");
			return $file;

		}

}