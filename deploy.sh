#! /bin/bash

while true
do
        case $1 in
                --project)
                        export PROJECT=$2
                        shift
                        shift
                ;;
                --tag)
                        export TAG=$2
                        shift
                        shift
                ;;
                --help|-h)
                        display_usage
            exit 0
        ;;
        -*)
            echo "Unknown option: $1"
            exit 1
        ;;
        *)
            break
        ;;
    esac
done

docker stack deploy --with-registry-auth --compose-file docker-compose.yml ${PROJECT}